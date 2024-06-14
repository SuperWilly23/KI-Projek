<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['ID_User' => 1, 'Tanggal_Pesanan' => '2023-11-26', 'Tanggal_Pengambilan' => '2023-11-28', 'ID_Pelanggan' => 1, 'Status_Pesanan' => 'Dalam Proses'],
            ['ID_User' => 2, 'Tanggal_Pesanan' => '2023-12-03', 'Tanggal_Pengambilan' => '2023-12-04', 'ID_Pelanggan' => 1, 'Status_Pesanan' => 'Selesai'],
            ['ID_User' => 1, 'Tanggal_Pesanan' => '2023-11-28', 'Tanggal_Pengambilan' => '2023-11-30', 'ID_Pelanggan' => 3, 'Status_Pesanan' => 'Selesai'],
            ['ID_User' => 2, 'Tanggal_Pesanan' => '2023-11-29', 'Tanggal_Pengambilan' => '2023-12-01', 'ID_Pelanggan' => 4, 'Status_Pesanan' => 'Selesai'],
            ['ID_User' => 1, 'Tanggal_Pesanan' => '2023-11-30', 'Tanggal_Pengambilan' => '2023-12-02', 'ID_Pelanggan' => 5, 'Status_Pesanan' => 'Dalam Proses'],
            ['ID_User' => 2, 'Tanggal_Pesanan' => '2023-12-01', 'Tanggal_Pengambilan' => '2023-12-03', 'ID_Pelanggan' => 6, 'Status_Pesanan' => 'Dalam Proses'],
            ['ID_User' => 1, 'Tanggal_Pesanan' => '2023-12-02', 'Tanggal_Pengambilan' => '2023-12-04', 'ID_Pelanggan' => 7, 'Status_Pesanan' => 'Selesai'],
            ['ID_User' => 2, 'Tanggal_Pesanan' => '2023-12-03', 'Tanggal_Pengambilan' => '2023-12-05', 'ID_Pelanggan' => 8, 'Status_Pesanan' => 'Selesai'],
            ['ID_User' => 2, 'Tanggal_Pesanan' => '2023-11-09', 'Tanggal_Pengambilan' => '2023-11-13', 'ID_Pelanggan' => 7, 'Status_Pesanan' => 'Belum Selesai'],
            ['ID_User' => 2, 'Tanggal_Pesanan' => '2023-11-09', 'Tanggal_Pengambilan' => '2023-11-13', 'ID_Pelanggan' => 7, 'Status_Pesanan' => 'Belum Selesai'],
            ['ID_User' => 2, 'Tanggal_Pesanan' => '2023-11-13', 'Tanggal_Pengambilan' => '2023-11-16', 'ID_Pelanggan' => 2, 'Status_Pesanan' => 'dsadas'],
            ['ID_User' => 1, 'Tanggal_Pesanan' => '2023-11-26', 'Tanggal_Pengambilan' => '2023-11-30', 'ID_Pelanggan' => 3, 'Status_Pesanan' => 'Dalam Proses'],
            ['ID_User' => 1, 'Tanggal_Pesanan' => '2023-12-03', 'Tanggal_Pengambilan' => '2023-12-07', 'ID_Pelanggan' => 5, 'Status_Pesanan' => 'Belum Selesai'],
        ];

        DB::table('pesanan')->insert($data);
    }
}
