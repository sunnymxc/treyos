<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DriverController;

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


// Handles Routing Logic
Auth::routes();
Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::resource('booking', BookingController::class);
Route::resource('agent', AgentController::class);
Route::resource('driver', DriverController::class);



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

// Paystack Testing
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);
