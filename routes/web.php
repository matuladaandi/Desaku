<?php

use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardWargaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MidtestController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WargaController;
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

// warga home
Route::get('/', [WargaController::class, 'index']);

// login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

//register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::resource('/dashboard/warga', DashboardWargaController::class)->except('show')->middleware('auth');
Route::resource('/dashboard/user', DashboardAdmin::class)->except('show')->middleware('admin');

Route::resource('/dashboard/warga', DashboardWargaController::class)->middleware('auth');

// cetak data warga
Route::get('/cetakWarga', 'CetakWargaController@index');
Route::get('/cetakWarga/cetak_pdf', 'CetakWargaController@cetak_pdf');

// midtest
Route::get('/midtest', [MidtestController::class, 'index']);
Route::get('/create', [MidtestController::class, 'create']);
Route::post('/store', [MidtestController::class, 'store']);
Route::get('/edit/{id}', [MidtestController::class, 'edit']);
Route::put('/edit/update/{id}', [MidtestController::class, 'update']);
Route::get('/delete/{id}', [MidtestController::class, 'delete']);
