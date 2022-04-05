<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\SubDistrictController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', fn () => redirect('home'));

Route::middleware('auth')->group(function () {
    Route::get('home', fn () => view('welcome'))->name('home');

    Route::get('sub-district', SubDistrictController::class)->name('subdistrict.index');
    Route::resource('categories', CategoryController::class);
    Route::resource('places', PlaceController::class);
});
