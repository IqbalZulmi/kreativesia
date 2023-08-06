<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RiwayatKonsulController extends Controller
{
    public function showRiwayatKonsulPage(){
        return view('mahasiswaPage.riwayat-konsultasi');
    }
}
