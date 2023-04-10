<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalModel extends Model
{
    use HasFactory;
    protected $table = 'jadwal';
    protected $fillable = [
        'kode_dokter',
        'hari',
        'jam',
        'kode_jadwal'
    ];
}
