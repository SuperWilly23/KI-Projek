<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Joko', 
            'NIK' => '1345', 
            'email' => 'joko123@gmail.com', 
            'password' => Hash::make('joko123'),
            'Gaji' => 3000000.00],
            ['name' => 'dani', 
            'NIK' => '1346', 
            'email' => 'dani123@gmail.com', 
            'password' => Hash::make('dani123'),
            'Gaji' => 3000000.00],
        ];

        DB::table('users')->insert($data);
    }
}
