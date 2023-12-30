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

Route::get('/cars/create',[CarController::class,'create'])->name('cars.create');

Route::post('cars',[CarController::class,'store'])->name('cars.store');

//Display edit contact form
Route::get('/cars/{id}/edit',[CarController::class, 'edit'])->name('cars.edit');

//update the contact details (put request)
Route::put('/cars/{id}',[CarController::class, 'update'])->name('cars.update');

Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');
