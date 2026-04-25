<?php

use App\Http\Controllers\Generate;
use App\Services\GenerateCombination;
use Illuminate\Support\Facades\Route;

Route::get('test', function() {
	return view('test');
});

Route::get('custom', function() {
	return view('custom.2026-04-25');
});

Route::get('/', function () {
	return view('home');
})->name('home');

Route::post('/', [Generate::class, 'index'])->name('generate');

Route::get('combinations', function () {
	$combinations = GenerateCombination::getCombinations();
	return view('combinations', compact('combinations'));
})->name('combinations');

Route::view('generate', 'docs');