<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class GenerateCombination
{
	public static function getExpandedMerchants(): array
	{
		$items = config('reimbursement.merchant');

		foreach ($items as $item) {
			$types = $item['type'];
			$prices = $item['price'];

			foreach ($types as $type) {
				foreach ($prices as $price) {
					$result[] = [
						'id' => $item['id'],
						'name' => $item['name'],
						'acquirer' => $item['acquirer'],
						'type' => $type,
						'price' => $price,
					];
				}
			}
		}

		return $result ?? [];
	}

	public static function getCombinations()
	{
		$combinations = Cache::remember('reimbursement.combinations', 60 * 60, function () {
			Log::info('Cache miss: generating combinations');
			$items = self::getExpandedMerchants();

			$validCombos = [];

			$count = count($items);

			for ($i = 0; $i < $count; $i++) {
				for ($j = $i + 1; $j < $count; $j++) {
					$a = $items[$i];
					$b = $items[$j];

					$isAFood = $a['type'] === 'food';
					$isBFood = $b['type'] === 'food';

					if ($isAFood xor $isBFood) {
						$total = $a['price'] + $b['price'];

						if (config('reimbursement.min_amount') > $total || $total > config('reimbursement.max_amount')) {
							continue;
						}

						$validCombos[] = [
							'items' => [$a, $b],
							'total' => $total,
						];
					}
				}
			}

			return $validCombos;
		});

		return $combinations;
	}
}
