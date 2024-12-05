<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    use HasFactory;

    // Daftar kolom yang diizinkan untuk mass assignment
    protected $fillable = [
        'nama',
        'jenis_kelamin',
        'tempat_lahir',
        'nama_orang_tua',
        'no_telepon',
        'alamat',
    ];
}
