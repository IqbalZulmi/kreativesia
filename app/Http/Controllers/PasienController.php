<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasienController extends Controller
{
    public function showPasienPage(){
        return view('psikologPage.pasien');
    }
}
