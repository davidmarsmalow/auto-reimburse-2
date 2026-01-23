<?php

namespace App\Http\Controllers;

use App\Services\GenerateBill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Generate extends Controller
{
	public function index(Request $request)
	{
		$validated = Validator::validate($request->all(), [
			'date_makan' => ['nullable'],
			'date_bensin' => ['nullable'],
			'date_parkir' => ['nullable'],
			'date_parkir_daily' => ['nullable'],
			'date_parkir_daily_image' => ['nullable', 'array'],
			'date_parkir_daily_image.*' => ['file', 'image', 'max:2048'],
			'date_overtime' => ['nullable'],
		]);

		$validated['date_makan'] = $this->splitDates($validated['date_makan'] ?? null);
		$validated['date_bensin'] = $this->splitDates($validated['date_bensin'] ?? null);
		$validated['date_parkir'] = $this->splitDates($validated['date_parkir'] ?? null);
		$validated['date_overtime'] = $this->splitDates($validated['date_overtime'] ?? null);

		$validated['date_parkir_daily'] = json_decode($validated['date_parkir_daily'] ?? '[]', true);
		if (!is_array($validated['date_parkir_daily'])) {
			$validated['date_parkir_daily'] = [];
		}

		$attachments = [];

		if ($request->hasFile('date_parkir_daily_image')) {
			foreach ($request->file('date_parkir_daily_image') as $image) {
				$attachments[] = [
					'path' => $image->store('parkir/daily', 'public'),
					'name' => $image->getClientOriginalName(),
					'size' => $image->getSize(),
				];
			}
		}

		$data_makan = [];
		foreach ($validated['date_makan'] as $date) {
			$data_makan[$date] = GenerateBill::lunch();
		}

		$data_overtime = [];
		$pool = config('reimbursement.overtime');
		foreach ($validated['date_overtime'] as $date) {
			$selected = $pool[array_rand($pool)];
			$data_overtime[$date] = [
				'id' => $selected['id'],
				'name' => $selected['name'],
				'items' => [
					[
						'id' => $selected['id'],
						'name' => $selected['name'],
						'type' => 'dinner',
						'price' => $selected['price'][array_rand($selected['price'])],
					]
				],
				'total' => $selected['price'][array_rand($selected['price'])],
			];
		}

		$data_bensin = [];
		$pool = config('reimbursement.transportation');
		foreach ($validated['date_bensin'] as $date) {
			$selected = $pool[array_rand($pool)];
			$data_bensin[$date] = [
				'id' => $selected['id'],
				'name' => $selected['name'],
				'price' => $selected['price'][array_rand($selected['price'])],
			];
		}

		$data_parkir = [];
		$parkFee = config('reimbursement.parkir.amount');
		foreach ($validated['date_parkir'] as $date) {
			$data_parkir[$date] = [
				'name' => 'PARKEE',
				'price' => $parkFee,
			];
		}

		$data_parkir_daily = collect($validated['date_parkir_daily'])
			->filter(fn($v) => is_array($v) && isset($v['date'], $v['amount']) && $v['date'] !== '' && $v['amount'] !== '')
			->map(fn($v) => [
				'date' => $v['date'],
				'amount' => (int) $v['amount'],
			])
			->values()
			->all();

		$table_data = [];
		foreach ($data_makan as $date => $lunch) {
			$table_data[] = [
				'date' => $date,
				'total' => min(40000, $lunch['total']),
				'type' => 'Lunch',
				'items' => $lunch['items'],
			];
		}

		foreach ($data_overtime as $date => $dinner) {
			$table_data[] = [
				'date' => $date,
				'total' => min(40000, $dinner['total']),
				'type' => 'Dinner',
				'items' => $dinner['items'],
			];
		}

		foreach ($data_bensin as $date => $value) {
			$table_data[] = [
				'date' => $date,
				'id' => $value['id'],
				'name' => $value['name'],
				'total' => $value['price'],
				'type' => 'Bensin',
			];
		}

		foreach ($data_parkir as $date => $value) {
			$table_data[] = [
				'date' => $date,
				'name' => $value['name'],
				'total' => $value['price'],
				'type' => 'Parkir'
			];
		}

		foreach($data_parkir_daily as $value) {
			$table_data[] = [
				'date' => $value['date'],
				'total' => $value['amount'],
				'type' => 'Parkir'
			];
		}

		$dates = collect($validated['date_parkir_daily'])
			->pluck('date')
			->filter()
			->sort()
			->values();

		$firstDate = $dates->first();
		$lastDate  = $dates->last();

		usort($table_data, fn($a, $b) => strtotime($a['date']) <=> strtotime($b['date']));

		$table_bill = [];
		foreach ($table_data as $value) {
			if ($value['type'] === 'Lunch') {
				foreach ($value['items'] as $item) {
					$table_bill[$value['date']][] = $item;
				}
			} elseif ($value['type'] === 'Bensin') {
				$table_bill[$value['date']][] = [
					'id' => $value['id'],
					'name' => $value['name'],
					'type' => $value['type'],
					'total' => $value['total'],
				];
			} elseif ($value['type'] === 'Parkir') {
				if (!isset($value['name'])) continue;
				$table_bill[$value['date']][] = [
					// 'id' => $value['id'],
					'name' => $value['name'],
					'type' => $value['type'],
					'total' => $value['total'],
				];
			} elseif ($value['type'] === 'Dinner') {
				foreach ($value['items'] as $item) {
					$table_bill[$value['date']][] = $item;
				}
			}
		}

		// dd($table_data, $table_bill);

		return view('docs', compact('table_data', 'table_bill', 'attachments', 'firstDate', 'lastDate'));
	}

	private function splitDates(?string $value): array
	{
		if (!$value) return [];

		return collect(explode(',', $value))
			->map(fn($v) => trim($v))
			->filter()
			->values()
			->all();
	}
}
