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

// handles routing logic
Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::get('booking', [BookingController::class, 'index']);
Route::post('booking', [BookingController::class, 'store']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' =>'auth'], function() {
	Route::group(['middleware' => 'role:agent', 'prefix' => 'agent', 'as' => 'agent.'], function() {
		Route::resource('dashboard', App\Http\Controllers\Agents\DashboardController::class);
	});
	Route::group(['middleware' => 'role:driver', 'prefix' => 'driver', 'as' => 'driver.'], function() {
		Route::resource('dashboard', App\Http\Controllers\Drivers\DashboardController::class);
	});
	Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'], function() {
		Route::resource('dashboard', App\Http\Controllers\Admin\DashboardController::class);
	});
});
