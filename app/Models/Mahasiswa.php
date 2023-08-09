<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nim';
    protected $fillable = [
        'nim',
        'id_user',
        'kode_pt',
        'id_jurusan/fakultas',
        'nama_mahasiswa',
        'alamat',
        'email',
        'jenis_kelamin',
        'foto'
    ];
}
