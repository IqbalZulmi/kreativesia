<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKonsultasi extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_laporan_konsultasi';
    protected $fillable = [
        'id_laporan_konsultasi',
        'nim',
        'kode_pt',
        'no_str',
        'id_janji_temu',
        'catatan_mahasiswa',
        'tingkat_permasalahan',
    ];
}
