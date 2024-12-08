<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ppdb extends Model
{
    protected $table = 'ppdbs';
    
    protected $fillable = [
        'nama', 
        'jenis_kelamin', 
        'tempat_lahir', 
        'nama_orang_tua', 
        'no_telepon', 
        'alamat'
    ];
}