<?php

namespace App\Services;

use App\Services\GenerateCombination;

class GenerateBill
{
	public static function lunch()
	{
		$combinations = GenerateCombination::getCombinations();

		shuffle($combinations);

		return $combinations[array_rand($combinations)];
	}
}