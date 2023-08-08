<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsikologController extends Controller
{
    public function showKelolaPage(){
        return view('perguruanTinggiPage.kelola-psikolog');
    }
}
