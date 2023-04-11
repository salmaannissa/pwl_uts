<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Salma Annissa',
                'email' => 'salma@gmail.com',
                'username' => 'salma',
                'password' => Hash::make('12345')
            ],
            [
                'name' => 'Aura Sagita',
                'email' => 'aura@gmail.com',
                'username' => 'aura',
                'password' => Hash::make('12345')
            ]
        ]);
    }
}
