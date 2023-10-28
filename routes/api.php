<?php

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/add-smartphones', [\App\Http\Controllers\SmartphoneController::class, 'addSmartphonesDataToRecombee']);
Route::get('/add-users', [\App\Http\Controllers\UserController::class, 'addUsersDataToRecombee']);
Route::get('/delete-users', [\App\Http\Controllers\UserController::class, 'deleteUser']);
Route::get('/add-users-views', [\App\Http\Controllers\UserController::class, 'addUserViews']);

