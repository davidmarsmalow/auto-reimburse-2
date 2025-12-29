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
			'date_makan' => '',
			'date_bensin' => '',
			'date_parkir' => '',
			'date_overtime' => '',
		]);

		$validated['date_makan'] = explode(',', $validated['date_makan']);
		$validated['date_bensin'] = explode(',', $validated['date_bensin']);
		$validated['date_parkir'] = explode(',', $validated['date_parkir']);
		$validated['date_overtime'] = explode(',', $validated['date_overtime']);

		$validated['date_makan'] = array_map('trim', $validated['date_makan']);
		$validated['date_bensin'] = array_map('trim', $validated['date_bensin']);
		$validated['date_parkir'] = array_map('trim', $validated['date_parkir']);
		$validated['date_overtime'] = array_map('trim', $validated['date_overtime']);

		$data_makan = [];
		if (!empty($validated['date_makan']) && $validated['date_makan'][0] !== '') {
			foreach ($validated['date_makan'] as $date) {
				$data_makan[$date] = GenerateBill::lunch();
			}
		}

		$data_overtime = [];
		if (!empty($validated['date_overtime']) && $validated['date_overtime'][0] !== '') {
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
		}

		$data_bensin = [];
		if (!empty($validated['date_bensin']) && $validated['date_bensin'][0] !== '') {
			$pool = config('reimbursement.transportation');

			foreach ($validated['date_bensin'] as $date) {
				$selected = $pool[array_rand($pool)];
				$data_bensin[$date] = [
					'id' => $selected['id'],
					'name' => $selected['name'],
					'price' => $selected['price'][array_rand($selected['price'])],
				];
			}
		}

		$data_parkir = [];
		if (!empty($validated['date_parkir']) && $validated['date_parkir'][0] !== '') {
			$parkFee = config('reimbursement.parkir.amount');

			foreach ($validated['date_parkir'] as $date) {
				$data_parkir[$date] = [
					'name' => 'PARKEE',
					'price' => $parkFee,
				];
			}
		}

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
				'id' => $selected['id'],
				'name' => $selected['name'],
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

		usort($table_data, function ($a, $b) {
			return strcmp($a['date'], $b['date']);
		});

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

		return view('docs', compact('table_data', 'table_bill'));
	}
}
