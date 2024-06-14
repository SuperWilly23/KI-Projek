<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['Harga_Cuci_Barang' => 5000, 'Jenis_Barang' => 'PAKAIAN'],
            ['Harga_Cuci_Barang' => 10000, 'Jenis_Barang' => 'SELIMUT'],
            ['Harga_Cuci_Barang' => 15000, 'Jenis_Barang' => 'SEPATU'],
            ['Harga_Cuci_Barang' => 11000, 'Jenis_Barang' => 'SPREI'],
        ];

        DB::table('barang')->insert($data);
    }
}
