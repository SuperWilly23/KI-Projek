<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DetailPesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'ID_Barang' => 1,
                'ID_Pesanan' => 1,
                'ID_Layanan' => 1,
                'Banyak_Pesanan' => 2,
            ],
            [
                'ID_Barang' => 2,
                'ID_Pesanan' => 2,
                'ID_Layanan' => 2,
                'Banyak_Pesanan' => 1,
            ],
            [
                'ID_Barang' => 3,
                'ID_Pesanan' => 3,
                'ID_Layanan' => 3,
                'Banyak_Pesanan' => 3,
            ],
            [
                'ID_Barang' => 4,
                'ID_Pesanan' => 4,
                'ID_Layanan' => 4,
                'Banyak_Pesanan' => 2,
            ],
            [
                'ID_Barang' => 1,
                'ID_Pesanan' => 5,
                'ID_Layanan' => 1,
                'Banyak_Pesanan' => 1,
            ],
            [
                'ID_Barang' => 2,
                'ID_Pesanan' => 6,
                'ID_Layanan' => 2,
                'Banyak_Pesanan' => 4,
            ],
            [
                'ID_Barang' => 3,
                'ID_Pesanan' => 7,
                'ID_Layanan' => 3,
                'Banyak_Pesanan' => 2,
            ],
            [
                'ID_Barang' => 4,
                'ID_Pesanan' => 8,
                'ID_Layanan' => 4,
                'Banyak_Pesanan' => 3,
            ],
            [
                'ID_Barang' => 2,
                'ID_Pesanan' => 13,
                'ID_Layanan' => 5,
                'Banyak_Pesanan' => 10,
            ],
            
        ];

        DB::table('detail_pesanan')->insert($data);
    }
}
