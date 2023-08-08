<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerguruanTinggiController extends Controller
{
    public function showKelolaPage(){
        return view('superAdminPage.kelola-perguruan-tinggi');
    }
}
