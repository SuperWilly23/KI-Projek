<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['Nama' => 'Jerico', 'Alamat' => 'jalan candi mendut', 'Nomor_Telepon' => '0876867676'],
            ['Nama' => 'satria', 'Alamat' => 'cengger ayam', 'Nomor_Telepon' => '0819999999'],
            ['Nama' => 'azhar', 'Alamat' => 'griya shanta', 'Nomor_Telepon' => '08782345678'],
            ['Nama' => 'Budi', 'Alamat' => 'Jalan Raya 123', 'Nomor_Telepon' => '08123456789'],
            ['Nama' => 'Rina', 'Alamat' => 'Jalan Baru 456', 'Nomor_Telepon' => '08111111111'],
            ['Nama' => 'Dewi', 'Alamat' => 'Jalan Maju 789', 'Nomor_Telepon' => '08222222222'],
            ['Nama' => 'Eko', 'Alamat' => 'Jalan Damai 101', 'Nomor_Telepon' => '08333333333'],
            ['Nama' => 'Siti', 'Alamat' => 'Jalan Indah 222', 'Nomor_Telepon' => '08444444444'],
            ['Nama' => 'Joni', 'Alamat' => 'Suhat Jalan Bunga Merak 2', 'Nomor_Telepon' => '087657823'],
            ['Nama' => 'Zidan', 'Alamat' => 'Jalan cengger ayam', 'Nomor_Telepon' => '087656789'],
        ];

        DB::table('pelanggan')->insert($data);
    }
}
