<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\BookController;
=======
use App\Http\Controllers\HomeController;
>>>>>>> 037a7665c6239cab23a50cd1e9449fa255819153

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

<<<<<<< HEAD
Route::get('home', [HomeController::class, 'index']);

Route::get('admin/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->middleware('role:admin');
Route::get('agent/dashboard', [App\Http\Controllers\Agent\DashboardController::class, 'index'])->middleware('role:agent');
Route::get('driver/dashboard', [App\Http\Controllers\Driver\DashboardController::class, 'index'])->middleware('role:driver');

Route::get('about', function () {
	return view('about');
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('contact', function () {
	return view('contact');
});

Route::get('services', function () {
	return view('services');
});

Auth::routes();

Route::get('/book', [BookController::class, 'index']);
Route::post('/book', [BookController::class, 'store']);

=======
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 037a7665c6239cab23a50cd1e9449fa255819153
