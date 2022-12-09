<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [WargaController::class, 'index']);
Route::get('/wargaCreate', [WargaController::class, 'create']);
Route::post('/wargaStore', [WargaController::class, 'store']);
Route::get('/wargaEdit/{id}', [WargaController::class, 'edit']);
Route::put('/wargaEdit/update/{id}', [WargaController::class, 'update']);
Route::get('/wargaDelete/{id}', [WargaController::class, 'delete']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index']);
