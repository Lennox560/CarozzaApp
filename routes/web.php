<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManufacturerController;
use App\Http\Controllers\CarController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars',[CarController::class,'index'])->name('cars.index');

Route::get('/manufacturers',[ManufacturerController::class,'index'])->name('manufacturers.index');

Route::get('/cars/show/{id}',[CarController::class,'show'])->name('cars.show');

