<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function showLayananPage(){
        return view('mahasiswaPage.layanan');
    }
}
