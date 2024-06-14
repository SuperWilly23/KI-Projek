<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LayananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['Nama_Layanan' => 'Cuci', 'Harga' => 0.00],
            ['Nama_Layanan' => 'Cuci Setrika', 'Harga' => 2000.00],
            ['Nama_Layanan' => 'Setrika', 'Harga' => 0.00],
            ['Nama_Layanan' => 'Deep Clean', 'Harga' => 0.00],
            ['Nama_Layanan' => 'Full Clean', 'Harga' => 5000.00],
        ];

        DB::table('layanan')->insert($data);
    }
}
