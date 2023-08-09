<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JanjiTemu extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_janji_temu';
    protected $fillable = [
        'id_janji_temu',
        'nim',
        'no_str',
        'keluhan_umum',
        'detail_masalah',
        'tanggal',
        'jam',
        'jenis_konsultasi',
        'status,'
    ];
}
