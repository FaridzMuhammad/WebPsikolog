<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\formPasienController;
use App\Http\Controllers\listPasienController;
use App\Http\Controllers\formDiagnosaController;
use App\Http\Controllers\listDiagnosaController;
use App\Http\Controllers\obatController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\loginController;
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
    return view('/login/loginsignup');
});

Route::get('/Dashboard', [DashboardController::class, 'index']);
Route::get('/formPasien', [formPasienController::class, 'index']);
Route::get('/listPasien', [listPasienController::class, 'index']);
Route::get('/formDiagnosa', [formDiagnosaController::class, 'index']);
Route::get('/listDiagnosa', [listDiagnosaController::class, 'index']);
Route::get('/formObat', [obatController::class, 'index']);
Route::get('/resepObat', [obatController::class, 'resep']);
Route::get('/listDokter', [listPasienController::class, 'dokter']);
Route::get('/Transaksi', [transaksiController::class, 'index']);
Route::get('/listTransaksi', [transaksiController::class, 'datatransaksi']);
// Route::get('/Login', [loginController::class, 'index']);
