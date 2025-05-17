<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\GovernorateController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('governorate', GovernorateController::class);
Route::resource('place', PlaceController::class);
