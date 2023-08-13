<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LayananController extends Controller
{
    public function showLayananPage(){
        if(Auth::check()){
            $kode_pt = Auth::user()->mahasiswa->kode_pt;
            
            $psikolog = Psikolog::where('kode_pt', $kode_pt)
            ->orderByRaw("CASE
                WHEN status = 'online' THEN 1
                WHEN status = 'sibuk' THEN 2
                WHEN status = 'offline' THEN 3
                ELSE 4
            END")
            ->get();
            return view('mahasiswaPage.layanan',[
                'dataPsikolog' => $psikolog
            ]);
        }else{
            return view('mahasiswaPage.layanan');
        }
    }
}
