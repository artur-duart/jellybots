<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvestmentController;

Route::get('/', function () {
    return view('home');
});

Route::get('/technology', function () {
    return view('technology');
});

Route::get('/invest', function () {
    return view('invest');
});

Route::get('/mission', function () {
    return view('mission');
});

Route::get('/solution', function () {
    return view('solution');
});

Route::get('/invest', [InvestmentController::class, 'create'])->name('invest.create');
Route::post('/invest', [InvestmentController::class, 'store'])->name('invest.store');

