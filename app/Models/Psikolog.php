<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psikolog extends Model
{
    use HasFactory;

    protected $primaryKey = 'no_str';
    protected $fillable = [
        'no_str',
        'id_user',
        'kode_pt',
        'nama_psikolog',
        'email',
        'alumni',
        'status',
        'no_telp',
        'foto',
    ];
}
