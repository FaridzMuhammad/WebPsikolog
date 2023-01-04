<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\formPasienController;
use App\Http\Controllers\listPasienController;
use App\Http\Controllers\formDiagnosaController;
use App\Http\Controllers\listDiagnosaController;
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
    return view('Layouts/Sidebar');
});

Route::get('/Dashboard', [DashboardController::class, 'index']);
Route::get('/formPasien', [formPasienController::class, 'index']);
Route::get('/listPasien', [listPasienController::class, 'index']);
Route::get('/formDiagnosa', [formDiagnosaController::class, 'index']);
Route::get('/listDiagnosa', [listDiagnosaController::class, 'index']);
