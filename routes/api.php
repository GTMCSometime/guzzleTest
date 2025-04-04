<?php

use App\Http\Controllers\IphoneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/iphone',[IphoneController::class, 'store'])->name('iphone');