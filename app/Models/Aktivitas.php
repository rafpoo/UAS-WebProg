<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aktivitas extends Model
{
    protected $fillable = ['nama_aktivitas', 'tipe', 'urutan'];
    
}
