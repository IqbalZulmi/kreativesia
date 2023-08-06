<?php

use App\Http\Controllers\LayananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanKonsulController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RiwayatKonsulController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', ([AuthController::class,'showLoginPage']))
->name('loginPage');

Route::get('/layanan', ([LayananController::class,'showLayananPage']))
->name('layananPage');

Route::get('/riwayat-konsultasi', ([RiwayatKonsulController::class,'showRiwayatKonsulPage']))
->name('riwayatKonsulPage');

Route::get('/pasien', ([PasienController::class,'showPasienPage']))
->name('riwayatKonsulPage');

Route::get('/laporan-konsultasi', ([LaporanKonsulController::class,'showLaporanPage']))
->name('laporanPage');
