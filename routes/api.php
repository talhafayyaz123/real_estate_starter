<?php

use App\Http\Controllers\Api\PropertyController;
use App\Http\Controllers\Api\CondosController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('store-property', [PropertyController::class, 'storeProperty']);
    Route::post('update-property', [PropertyController::class, 'updateProperty']);
    Route::post('update-property-status', [PropertyController::class, 'updatePropertyStatus']);
    Route::delete('delete-property', [PropertyController::class, 'deleteProperty']);
    Route::post('update-property-status', [PropertyController::class, 'updatePropertyStatus']);
    Route::apiResource('condos', CondosController::class);
    Route::post('update-condo-status', [CondosController::class, 'updateCondoStatus']);
});
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('forgot-password', [AuthController::class, 'forgotPassword']);
Route::post('reset-password', [AuthController::class, 'resetPassword']);
Route::get('get-properties', [PropertyController::class, 'getProperties']);
Route::get('get-condos', [CondosController::class, 'index']);

Route::get('get-condo-detail/{id}', [CondosController::class, 'show']);
