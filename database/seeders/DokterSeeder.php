<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DokterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dokter')->insert([
            [
                'kode_dokter' =>'D5101',
                'nama_dokter' =>'dr. Salma Annissa, Sp.KFR',
                'spesialis' =>'Kedokteran Fisik dan Rehabilitas',
                'hp' => '085423876555',
                'alamat' => 'Jl.Kenanga no.4 Soetomo',
                'jk' => 'P',             
            ],
            
            [
                'kode_dokter' =>'D5102',
                'nama_dokter' =>'dr. Aura Sagita',
                'spesialis' =>'Umum',
                'hp' => '082234517765',
                'alamat' => 'Jl.Abdullah no.11 Ahmad Yani',
                'jk' => 'P',             
            ],
            [
                'kode_dokter' =>'D5103',
                'nama_dokter' =>'dr. Jaeman Subandoko, Sp. And',
                'spesialis' =>'Andrologi',
                'hp' => '08234518776',
                'alamat' => 'Jl.Sayuti melik no.7 Gatot',
                'jk' => 'L',             
            ],
            [
                'kode_dokter' =>'D5104',
                'nama_dokter' =>'dr. Ringga Haryadi, Sp. S',
                'spesialis' =>'Saraf',
                'hp' => '087765442321',
                'alamat' => 'Jl.Gatot Subroto no.1 Kalasan',
                'jk' => 'L',             
            ],
            [
                'kode_dokter' =>'D5105',
                'nama_dokter' =>'dr. Jenno Kharisma, Sp.EM',
                'spesialis' =>'Emergency Medik',
                'hp' => '081234519963',
                'alamat' => 'Jl.Budi Oetomo no.6 Nganjuk',
                'jk' => 'L',             
            ],
            [
                'kode_dokter' =>'D5106',
                'nama_dokter' =>'drg. Erlangga Mahaputra, Sp. Pros',
                'spesialis' =>'Gigi',
                'hp' => '085234789654',
                'alamat' => 'Jl.Simpang tujuh Puti no.8 Probolinggo',
                'jk' => 'L',             
            ],
            [
                'kode_dokter' =>'D5107',
                'nama_dokter' =>'dr. Zacky Maulana, Sp. B',
                'spesialis' =>'Bedah Umum',
                'hp' => '089765123456',
                'alamat' => '',
                'jk' => 'L',             
            ],
            [
                'kode_dokter' =>'D5108',
                'nama_dokter' =>'dr. Narell Antasari',
                'spesialis' =>'Umum',
                'hp' => '087624567176',
                'alamat' => 'Jl.Kembang Turi no.2 Malang',
                'jk' => 'L',             
            ],
            
            [
                'kode_dokter' =>'D5109',
                'nama_dokter' =>'dr. Sekar Kusuma, Sp. PD.KGEH',
                'spesialis' =>'Penyakit Dalam',
                'hp' => '085679987654',
                'alamat' => 'Jl.Melati Putih no.1 Malang',
                'jk' => 'P',             
            ],
            [
                'kode_dokter' =>'D5110',
                'nama_dokter' =>'dr. Yesaya Katalina, Sp.PA',
                'spesialis' =>'Pathologi Anatomi',
                'hp' => '082267876324',
                'alamat' => 'Jl.Pattimura no.9 Malang',
                'jk' => 'P',             
            ],
            [
                'kode_dokter' =>'D5111',
                'nama_dokter' =>'dr. Jess Amin Romeo, Sp.PK',
                'spesialis' =>'Pathologi Klinik',
                'hp' => '082123456789',
                'alamat' => 'Jl.Simpang Remujung no.7 Malang',
                'jk' => 'L',             
            ]
        ]);
    }
}
