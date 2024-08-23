<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\MemberController;
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::get('list/{id?}', [DeviceController::class, 'list']);
    Route::post('/create', [DeviceController::class, 'create']);
    Route::put('/update/{id}', [DeviceController::class, 'update']);
    Route::get('/search/{name}', [DeviceController::class, 'search']);
    Route::delete("/delete/{id}", [DeviceController::class, 'delete']);
    Route::post('save', [DeviceController::class, 'testData']);
    Route::apiResource("members", MemberController::class);
}); 

Route::post('/login', [UserController::class, 'login']);
