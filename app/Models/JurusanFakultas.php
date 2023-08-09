<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JurusanFakultas extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_jurusan/fakultas';
    protected $fillable = [
        'id_jurusan/fakultas',
        'jurusan/fakultas',
        'kode_pt',
    ];
}
