<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\BookingController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

Route::get('home', [HomeController::class, 'index'])->middleware('auth');


// Handles user Authentication Logic
Auth::routes();
Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
Route::get('/login/agent', [LoginController::class, 'showAgentLoginForm']);
Route::get('/login/driver', [LoginController::class, 'showDriverLoginForm']);

Route::get('/register/admin', [RegisterController::class, 'showAdminRegisterForm']);
Route::get('/register/agent', [RegisterController::class, 'showAgentRegisterForm']);
Route::get('/register/driver', [RegisterController::class, 'showDriverRegisterForm']);

Route::post('/login/admin', [LoginController::class, 'adminLogin']);
Route::post('/login/agent', [LoginController::class, 'agentLogin']);
Route::post('/login/driver', [LoginController::class, 'driverLogin']);

Route::post('/register/admin', [RegisterController::class, 'createAdmin']);
Route::post('/register/agent', [RegisterController::class, 'createAgent']);
Route::post('/register/driver', [RegisterController::class, 'createDriver']);

Route::view('/admin', 'admin');
Route::view('/writer', 'writer');

Route::get('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);

Route::resource('booking', BookingController::class);
Route::resource('agent', AgentController::class);
Route::resource('driver', DriverController::class);



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function() {
    return view('dashboard');
})->name('dashboard');


// Paystack Testing
Route::post('/pay', [App\Http\Controllers\PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\PaymentController::class, 'handleGatewayCallback']);
