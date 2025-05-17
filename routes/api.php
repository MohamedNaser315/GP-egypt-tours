<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiPlaceController;
use App\Http\Controllers\ApigovernorateController;

Route::get('/ping', function () {
    return response()->json(['message' => 'pong']);
});

Route::get('places',[ApiPlaceController::class,'index']);
Route::get('place/search/{name}',[ApiPlaceController::class,'search']);

Route::get('governorates',[ApigovernorateController::class,'index']);
Route::get('governorate/search/{name}',[ApigovernorateController::class,'search']);
// Route::resource('places', ApiPlaceController::class);
// Route::resource('place/search/{name}', ApiPlaceController::class);