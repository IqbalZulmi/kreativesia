<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';
    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'id_user',
        'kode_pt',
        'id_fakultas',
        'nama_mahasiswa',
        'alamat',
        'email',
        'jenis_kelamin',
        'foto'
    ];

    public function janjiTemu(){
        return $this->hasMany(JanjiTemu::class,'nim');
    }

    public function akunMahasiswa(){
        return $this->belongsTo(User::class,'id_user');
    }

    public function fakultas(){
        return $this->belongsTo(Fakultas::class,'id_fakultas');
    }

    public function perguruanTinggi(){
        return $this->belongsTo(PerguruanTinggi::class,'kode_pt');
    }

    public function hasilKonsultasi(){
        return $this->hasMany(LaporanKonsultasi::class,'nim');
    }
}
