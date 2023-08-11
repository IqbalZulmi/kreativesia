<?php

namespace App\Http\Controllers;

use App\Models\PerguruanTinggi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PerguruanTinggiController extends Controller
{
    public function showKelolaPage(){
        $perguruanTinggi = PerguruanTinggi::all();
        return view('superAdminPage.kelola-perguruan-tinggi',[
            'perguruanTinggi' => $perguruanTinggi,
        ]);
    }

    public function tambahPerguruan(Request $request){
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'kode_pt' => 'required',
            'nama_pt' => 'required',
            'alamat_pt' => 'required',
            'kode_pos_pt' => 'required|numeric',
            'foto' => 'nullable',
        ],[
            'username.required' => 'username harus diisi',
            'username.unique' => 'username telah digunakan',
            'password.required' => 'password harus diisi',
            'password.min' => 'password minimal 8 karakter',
            'kode_pt.required' => 'kode perguruan tinggi harus diisi',
            'nama_pt.required' => 'nama perguruan tinggi harus diisi',
            'alamat_pt.required' => 'alamat perguruan tinggi harus diisi',
            'kode_pos_pt.required' => 'kode pos harus diisi',
            'kode_pos_pt.numeric' => 'kode pos harus angka',
        ]);

        $akun = new User();
        $akun->username = $request->username;
        $akun->password = Hash::make($request->password);
        $akun->role = 'perguruan tinggi';
        $akun->save();

        $perguruanTinggi = new PerguruanTinggi();
        $perguruanTinggi->kode_pt = $request->kode_pt;
        $perguruanTinggi->id_user = $akun->id_user;
        $perguruanTinggi->nama_pt = $request->nama_pt;
        $perguruanTinggi->alamat_pt = $request->alamat_pt;
        $perguruanTinggi->kode_pos_pt = $request->kode_pos_pt;

        if ($perguruanTinggi->save()) {
            return redirect()->back()->with([
                'notifikasi' => 'Berhasil membuat akun!',
                'type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Gagal membuat akun',
                'type' => 'error'
            ]);
        }
    }

    public function editPerguruan(Request $request,$id_user){
        $validatedData = $request->validate([
            'username' => 'required|unique:users,username',
            'password' => 'required|min:8',
            'kode_pt' => 'required',
            'nama_pt' => 'required',
            'alamat_pt' => 'required',
            'kode_pos_pt' => 'required|numeric',
            'foto' => 'nullable',
        ],[
            'username.required' => 'username harus diisi',
            'username.unique' => 'username telah digunakan',
            'password.required' => 'password harus diisi',
            'password.min' => 'password minimal 8 karakter',
            'kode_pt.required' => 'kode perguruan tinggi harus diisi',
            'nama_pt.required' => 'nama perguruan tinggi harus diisi',
            'alamat_pt.required' => 'alamat perguruan tinggi harus diisi',
            'kode_pos_pt.required' => 'kode pos harus diisi',
            'kode_pos_pt.numeric' => 'kode pos harus angka',
        ]);

        $akun = user::where('id_user',$id_user)->firstOrFail();
        $akun->username = $request->username;
        $akun->password = Hash::make($request->password);
        $akun->role = 'perguruan tinggi';
        $akun->save();

        $perguruanTinggi = new PerguruanTinggi();
        $perguruanTinggi->kode_pt = $request->kode_pt;
        $perguruanTinggi->id_user = $akun->id_user;
        $perguruanTinggi->nama_pt = $request->nama_pt;
        $perguruanTinggi->alamat_pt = $request->alamat_pt;
        $perguruanTinggi->kode_pos_pt = $request->kode_pos_pt;

        if ($perguruanTinggi->save()) {
            return redirect()->back()->with([
                'notifikasi' => 'Berhasil membuat akun!',
                'type' => 'success'
            ]);
        } else {
            return redirect()->back()->with([
                'notifikasi' => 'Gagal membuat akun',
                'type' => 'error'
            ]);
        }
    }
}
