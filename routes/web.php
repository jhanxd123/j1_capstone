<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

// Full Route Folder
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);

// If use App\Http\Controllers is used ^
Route::get('/generate_qr_code', [HomeController::class, 'generate_qr_code']);
Route::get('/profile_dispatcher', [HomeController::class, 'profile_dispatcher']);
Route::get('/profile_vehicle', [HomeController::class, 'profile_vehicle']);

// Account
Route::get('/profile_dispatcher/account', [HomeController::class, 'profile_dispatcher']);

// Trial Purposes
Route::get('/try', [HomeController::class, 'try']);

// Backup
Route::get('/about', [HomeController::class, 'about']);