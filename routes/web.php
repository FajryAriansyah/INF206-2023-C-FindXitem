<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Controller::class, 'showLanding']);
Route::get('/landing-page',[Controller::class, 'showLanding']);

Route::get('/search', [Controller::class, 'search']);

Route::get('/report', [BarangController::class, 'report']);
Route::get('/result', [Controller::class, 'result']);

Route::get('/verifikasi', [Controller::class, 'verif']);
Route::get('/result/notfound', [Controller::class, 'notfound']);

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'authenticate']);


Route::post('/login/create', [LoginController::class, 'store']);

// Route::get
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
