<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pasien')->insert([
            [
                'kode_pasien' =>'PS101',
                'nama_pasien' =>'Belvina Aurora Putri',
                'jk' =>'P',
                'poli' =>'Umum',
                'keluhan' =>'bintik-bintik merah, lemas, pendarahan di gigi.',
                'diagnosa' =>'DBD (Demam Berdarah Dengue)',
                'nama_wali' =>'Widodo Nigrat',
                'hp_wali' =>'082344654777',
                'alamat' =>'Jl.Tutwuri Handayani no.2 Malang'                
            ],
            [
                'kode_pasien' =>'PS102',
                'nama_pasien' =>'Belle Cristiani Sari',
                'jk' =>'P',
                'poli' =>'Syaraf',
                'keluhan' =>'demam cukup tinggi serta sakit kepala. leher terasa kaku.',
                'diagnosa' =>'Meningitis atau radang selaput',
                'nama_wali' =>'Rianti Sari',
                'hp_wali' =>'082378654333',
                'alamat' =>'Jl.Soekarno-hatta no.4 Malang'
            ],
            [
                'kode_pasien' =>'PS103',
                'nama_pasien' =>'Ivona Prisilla',
                'jk' =>'P',
                'poli' =>'Syaraf',
                'keluhan' =>'kejang kejang, jantung berdebar-debar, mata berkunang-kunang',
                'diagnosa' =>'Epilepsi',
                'nama_wali' =>'Sukma Carla',
                'hp_wali' =>'089765432112',
                'alamat' =>'Jl.Putra Angkasa no.4 Kediri'
            ],
            [
                'kode_pasien' =>'PS104',
                'nama_pasien' =>'Jovanka Putra Lingga',
                'jk' =>'L',
                'poli' =>'Gigi',
                'keluhan' =>'Demam dan sakit kepala, Nyeri saat mengunyah, Sulit menelan',
                'diagnosa' =>'Kanker Mulut',
                'nama_wali' =>'Prabu Lingga Wardana',
                'hp_wali' =>'089563245181',
                'alamat' =>'Jl.Kuping Gajah no.2 Malang' 
            ],
            [
                'kode_pasien' =>'PS105',
                'nama_pasien' =>'Kevin Angkasa Putra',
                'jk' =>'L',
                'poli' =>'Emergency Medik',
                'keluhan' =>'Pendarahan di Kaki, Luka Lecet, Memar, Patah Tulang Kaki',
                'diagnosa' =>'Cidera Berat',
                'nama_wali' =>'Erlangga Putra',
                'hp_wali' =>'081278654393',
                'alamat' =>'Jl.Kembang Turi no.6 Malang'  
            ],
            [
                'kode_pasien' =>'PS106',
                'nama_pasien' =>'Hendra Putra Wijaya',
                'jk' =>'L',
                'poli' =>'Andrologi',
                'keluhan' =>'nyeri saat buang air kecil dan ejakulasi, sakit di punggung bawah, dan terdapat darah pada urine saat buang air kecil.',
                'diagnosa' =>'Kanker prostat',
                'nama_wali' =>'Ahmad Wijaya',
                'hp_wali' =>'081672893675',
                'alamat' =>'Jl.Pinang Merah no.8 Malang'   
            ],
            [
                'kode_pasien' =>'PS107',
                'nama_pasien' =>'Nadine Tamalia',
                'jk' =>'P',
                'poli' =>'Rehab Medik',
                'keluhan' =>'Kecanduan Pil Tidur',
                'diagnosa' =>'Overdosis',
                'nama_wali' =>'Absun Mursid',
                'hp_wali' =>'087345672999',
                'alamat' =>'Jl.Pisang Kipas No.2 Malang'   
            ],
            [
                'kode_pasien' =>'PS108',
                'nama_pasien' =>'Laila Karamina',
                'jk' =>'P',
                'poli' =>'Umum',
                'keluhan' =>'Batu Berdahak, hidung tersumbat, dan demam tinggi',
                'diagnosa' =>'Flu & Demam',
                'nama_wali' =>'Dhea Matsuti',
                'hp_wali' =>'082378444991',
                'alamat' =>'Jl.Kartini no.4 LowokWaru'   
            ],
        ]);
    
    }
}
