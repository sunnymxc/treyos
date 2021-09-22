<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookingController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('home', [HomeController::class, 'index']);

Route::get('welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/booking/haulage', [BookingController::class, 'showGoodsForm']);
Route::get('/booking/home', [BookingController::class, 'showHomeForm']);
Route::get('/booking/office', [BookingController::class, 'showOfficeForm']);


