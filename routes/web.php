<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[\App\Http\Controllers\DonorController::class,'index']);
Route::post('/create_donor',[\App\Http\Controllers\DonorController::class,'create'])->name('createdonor');
