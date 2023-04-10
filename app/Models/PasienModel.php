<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasienModel extends Model
{
    use HasFactory;
    protected $table = 'pasien';
    protected $fillable = [
        'kode_pasien',
        'nama_pasien',
        'kode_dokter',
        'poli',
        'keluhan',
        'diagnosa',
        'nama_wali',
        'hp_wali',
        'alamat',
        'jk'
    ];
}
