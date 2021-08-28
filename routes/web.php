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

Route::get('/admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('role:crown');
Route::get('/agent/dashboard', [App\Http\Controllers\Agent\DashboardController::class, 'index'])->middleware('role:agent');
Route::get('/driver/dashboard', [App\Http\Controllers\Driver\DashboardController::class, 'index'])->middleware('role:driver');



Auth::routes();

Route::get('booking', [BookingController::class, 'index']);
Route::post('booking', [BookingController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/booking', [BookingController::class, 'create']);
Route::post('/booking', [BookingController::class, 'store']);

