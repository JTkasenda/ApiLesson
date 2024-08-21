<?php

use App\Http\Controllers\DeviceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('list/{id?}', [DeviceController::class, 'list']);
Route::post('/create', [DeviceController::class, 'create']);
Route::put('/update/{id}', [DeviceController::class, 'update']);
Route::get('/search/{name}', [DeviceController::class, 'search']);