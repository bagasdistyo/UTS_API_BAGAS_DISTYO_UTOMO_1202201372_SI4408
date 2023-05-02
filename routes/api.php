<?php

use App\Http\Controllers\API\CustomerController;
use App\Http\Controllers\API\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('customer', [CustomerController::class, 'index']);
Route::post('customer/store', [CustomerController::class, 'store']);
Route::get('customer/show/{id}', [CustomerController::class, 'show']);
Route::put('customer/update/{id}', [CustomerController::class, 'update']);

Route::get('room', [RoomController::class, 'index']);
Route::get('room/show/{id}', [RoomController::class, 'show']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
