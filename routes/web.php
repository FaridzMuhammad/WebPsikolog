<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\formPasienController;
use App\Http\Controllers\listPasienController;
use App\Http\Controllers\formDiagnosaController;
use App\Http\Controllers\listDiagnosaController;
use App\Http\Controllers\obatController;
use App\Http\Controllers\transaksiController;
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

Auth::routes();

Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
    // Get
    Route::get('/Dashboard', [DashboardController::class, 'index']);
    Route::get('/formPasien', [formPasienController::class, 'index'])->name('form.pasien');
    Route::get('/listPasien', [listPasienController::class, 'index']);
    Route::get('/formDiagnosa', [formDiagnosaController::class, 'index'])->name('form.sesi');
    Route::get('/listDiagnosa', [listDiagnosaController::class, 'index']);
    Route::get('/formObat', [obatController::class, 'index'])->name('form.obat');
    Route::get('/resepObat', [obatController::class, 'resep'])->name('form.resep');
    Route::get('/listDokter', [listPasienController::class, 'dokter']);
    Route::get('/Transaksi', [transaksiController::class, 'index'])->name('form.transaksi');
    Route::get('/listTransaksi', [transaksiController::class, 'datatransaksi']);

    // Post
    Route::post('/formPasien/submit', [formPasienController::class, 'store'])->name('form.submit');
    Route::post('/formDiagnosa/submit', [formDiagnosaController::class, 'store'])->name('form.submit.sesi');
    Route::post('/formObat/submit', [obatController::class, 'storeObat'])->name('form.submit.obat');
    Route::post('/formResep/submit', [obatController::class, 'storeResep'])->name('form.submit.resep');
    Route::post('/formTransaksi/submit', [transaksiController::class, 'storeTransaksi'])->name('form.submit.transaksi');
});
