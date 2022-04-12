<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\Menu\ListMenuController;
use App\Http\Controllers\Api\Menu\ShowMenuController;
use App\Http\Controllers\Api\Place\ListPlaceController;
use App\Http\Controllers\Api\Place\ShowPlaceController;
use App\Http\Controllers\Api\SubDistrict\ListPlaceBySubDistrictController;
use App\Http\Controllers\Api\SubDistrict\ListSubDistrictController;
use App\Http\Controllers\Api\SubDistrict\ShowSubDistrictController;
use App\Http\Controllers\Api\User\ListFavoritePlaceController;
use App\Http\Controllers\Api\User\StoreFavoritePlaceController;
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


Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', fn (Request $request) => $request->user());

    Route::post('user/places/{place}/favorite', StoreFavoritePlaceController::class);
    Route::get('user/places', ListFavoritePlaceController::class);
});

Route::post('register', RegisterController::class);
Route::post('login', LoginController::class);

Route::get('places', ListPlaceController::class);
Route::get('places/{place}', ShowPlaceController::class);
Route::get('places/{place}/menu', ListMenuController::class);
Route::get('places/{place:id}/menu/{menu:id}', ShowMenuController::class);
Route::get('sub-districts', ListSubDistrictController::class);
Route::get('sub-districts/{subDistrict}', ShowSubDistrictController::class);
Route::get('sub-districts/{subDistrict}/place', ListPlaceBySubDistrictController::class);
