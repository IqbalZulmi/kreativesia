<?php

use App\Http\Controllers\LayananController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanKonsulController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RiwayatKonsulController;
use App\Http\Controllers\PerguruanTinggiController;
use App\Http\Controllers\PsikologController;
use App\Http\Middleware\CekRole;
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

Route::middleware('guest')->group(function(){
    Route::get('/login', ([AuthController::class,'showLoginPage']))
    ->name('loginPage');

    Route::post('/proses-login', ([AuthController::class, 'loginProcess']))
    ->name('loginProcess');

});

Route::get('/logout', ([AuthController::class, 'logout']))
->name('logout')->middleware('auth');

Route::get('/layanan', ([LayananController::class,'showLayananPage']))
->name('layananPage');

Route::middleware(CekRole::class . ':mahasiswa')->group(function(){
    Route::get('/riwayat-konsultasi', ([RiwayatKonsulController::class,'showRiwayatKonsulPage']))
    ->name('riwayatKonsulPage');

    Route::get('/hasil-konsultasi', ([LaporanKonsulController::class,'showHasilKonsultasiMahasiswaPage']))
    ->name('hasilKonsultasiPage');
});

Route::middleware(CekRole::class . ':psikolog')->group(function(){
    Route::get('/pasien', ([PasienController::class,'showPasienPage']))
    ->name('pasienPage');

    Route::get('/laporan-konsultasi', ([LaporanKonsulController::class,'showLaporanPsikologPage']))
    ->name('laporanPsikologPage');
});

Route::middleware(CekRole::class . ':perguruan tinggi')->group(function(){
    Route::get('/hasil-laporan-psikolog', ([LaporanKonsulController::class,'showHasilLaporanPsikologPage']))
    ->name('hasilLaporanPsikologPage');

    Route::get('/kelola-mahasiswa', ([MahasiswaController::class,'showKelolaPage']))
    ->name('kelolaMahasiswaPage');

    Route::get('/kelola-psikolog', ([PsikologController::class,'showKelolaPage']))
    ->name('kelolaPsikologPage');

});

Route::middleware(CekRole::class . ':superadmin')->group(function(){
    Route::get('/kelola-perguruan-tinggi', ([PerguruanTinggiController::class,'showKelolaPage']))
    ->name('kelolaPerguruanPage');

    Route::post('/tambah-perguruan-tinggi', ([PerguruanTinggiController::class,'tambahPerguruan']))
    ->name('tambahPerguruanTinggi');

    Route::put('/edit-perguruan-tinggi/{id_user}', ([PerguruanTinggiController::class,'editPerguruan']))
    ->name('editPerguruanTinggi');

    Route::delete('/hapus-perguruan-tinggi/{id_user}', ([PerguruanTinggiController::class,'hapusPerguruan']))
    ->name('hapusPerguruanTinggi');
});

