<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Packet extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_paket', 'kode_seksi_utama', 'dosen', 'jenis'
    ];
    
}
