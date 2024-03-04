<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BMIController;
Route::get('/bmi', [BMIController::class,"index"]);
Route::post('/bmi', [BMIController::class,"calculate"])->name('calculate');


Route::get('/', function () {
    return view('welcome');
});
