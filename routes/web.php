<?php

use App\Http\Controllers\Generate;
use App\Services\GenerateCombination;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
	return view('home');
})->name('home');

Route::post('/', [Generate::class, 'index'])->name('generate');

Route::get('combinations', function () {
	$combinations = GenerateCombination::getCombinations();
	return view('combinations', compact('combinations'));
})->name('combinations');

Route::view('generate', 'docs');