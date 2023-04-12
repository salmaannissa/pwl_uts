<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jadwal')->insert([
            [
                'kode_Jadwal' =>'JD101',
                'hari' =>'Senin',
                'jam' =>'09:00-11:00 WIB',
                'kode_dokter' =>'DS103',
            ],
            [
                'kode_Jadwal' =>'JD102',
                'hari' =>'Selasa',
                'jam' =>'09:00-11:00 WIB',
                'kode_dokter' =>'DS101',
            ],
            [
                'kode_Jadwal' =>'JD103',
                'hari' =>'Rabu',
                'jam' =>'09:00-11:00 WIB',
                'kode_dokter' =>'DS106',
            ],
            [
                'kode_Jadwal' =>'JD104',
                'hari' =>'Kamis',
                'jam' =>'09:00-11:00 WIB',
                'kode_dokter' =>'DS102',
            ],
            [
                'kode_Jadwal' =>'JD105',
                'hari' =>'Jumat',
                'jam' =>'09:00-11:00 WIB',
                'kode_dokter' =>'DS101',
            ],
            [
                'kode_Jadwal' =>'JD106',
                'hari' =>'Sabtu',
                'jam' =>'09:00-11:00 WIB',
                'kode_dokter' =>'DS104',
            ],
        ]);
    }
}
