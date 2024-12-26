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
        'tanggal_lahir',
        'nama_ayah', 
        'no_telepon_ayah',
        'nama_ibu', 
        'no_telepon_ibu', 
        'alamat'
    ];
}