<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanKonsulController extends Controller
{
    public function showLaporanPsikologPage(){
        return view('psikologPage.laporan-psikolog');
    }

    public function showHasilLaporanPsikologPage(){
        return view('PerguruanTinggiPage.hasil-laporan-psikolog');
    }
    public function showHasilKonsultasiMahasiswaPage(){
        return view('MahasiswaPage.hasil-konsultasi');
    }

}
