<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DependentDropdownController;
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
Route::post('/search', [BarangController::class, 'searchResult']);
Route::get('/search/hasil/{barang:id}', [BarangController::class, 'searchResultView'])->name('hasil');

Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/kategori/{kategori:slug}', [KategoriController::class, 'show']);



Route::get('/report', [BarangController::class, 'report']);
Route::post('/report', [BarangController::class, 'store']);
Route::get('/report/hasil', [BarangController::class, 'reportResult']);


Route::get('/result', [Controller::class, 'result']);

Route::get('/verifikasi/{id}', [Controller::class, 'verif'])->name('verifikasi');
Route::get('/result/notfound', [Controller::class, 'notfound']);

Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::post('/login/create', [LoginController::class, 'store']);

// Route Kabupaten
Route::get('provinces', 'DependentDropdownController@provinces')->name('provinces');
Route::get('cities', 'DependentDropdownController@cities')->name('cities');
Route::get('districts', 'DependentDropdownController@districts')->name('districts');
Route::get('villages', 'DependentDropdownController@villages')->name('villages');


Route::get('search/hasil/{barang:id}/verif',[RequestController::class, 'index'])->middleware('auth');
Route::post('search/hasil/{barang:id}/verif/store',[RequestController::class, 'store'])->middleware('auth');
// Route::get
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/{requestverif:id}/ac', [DashboardController::class, 'accept']);
Route::post('/{requestverif:id}/re', [DashboardController::class, 'reject']);