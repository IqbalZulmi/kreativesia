<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporanKonsulController extends Controller
{
    public function showLaporanPage(){
        return view('psikologPage.laporan');
    }
}
