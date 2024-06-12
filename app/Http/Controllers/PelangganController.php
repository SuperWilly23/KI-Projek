<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelangganController extends Controller
{
    public function data()
    {
        $pelanggan = DB::table('pelanggan')->get();
        // return $pelanggan;
        return view('tables2', ['pelanggan'=>$pelanggan]);
    }
    public function layananPelanggan()
    {
        $layanan = DB::table('layanan')->get();
        // return $pelanggan;
        return view('layanan', ['layanan'=>$layanan]);
    }
    public function barangPelanggan()
    {
        $barang = DB::table('barang')->get();
        // return $pelanggan;
        return view('barang', ['barang'=>$barang]);
    }
    public function addPelanggan(){
        return view('add');   
    }
    public function addProcess(Request $request)
    {
        $nama = $request->input('Nama');
        $alamat = $request->input('Alamat');
        $nomorTelepon = $request->input('Nomor_Telepon');
    
        $result = DB::select('CALL addPelanggan(?, ?, ?)', array($nama, $alamat, $nomorTelepon));
    
        return redirect('pelanggan')->with('status', 'Data Pelanggan Berhasil Ditambahkan');
    }
    public function updatePelanggan(Request $request)
    {
        $pelangganID = $request->input('ID_PELANGGAN');
        $newNama = $request->input('Nama');
        $newAlamat = $request->input('Alamat');
        $newNomorTelepon = $request->input('Nomor_Telepon');
    
        $result = DB::update('CALL updatePelanggan(?, ?, ?, ?)', array($pelangganID, $newNama, $newAlamat, $newNomorTelepon));
    
        if ($result) {
            return redirect('pelanggan')->with('status', 'Data Pelanggan Berhasil Diperbarui');
        } else {
            return redirect('pelanggan')->with('status', 'Gagal memperbarui data pelanggan');
        }
    }
    public function deletePelanggan(Request $request)
    {

        $pelangganID = $request->input('ID_Pelanggan');

        $result = DB::select('CALL deletePelanggan(?)', array($pelangganID));
    
        return redirect('pelanggan')->with('status', 'Data Pelanggan Berhasil Dihapus');  
    }
    public function pesananPelanggan()
    {
        $pesanan = DB::table('pesanan')->get();
        
        return view('tables', ['pesanan'=>$pesanan]);
    }
    public function addPesanan(){
        return view('addPesanan');   
    }
    public function addPP(Request $request)
    {
        $pegawaiID = $request->input('ID_Pegawai');
        $tanggalPesanan = $request->input('Tanggal_Pesanan');
        $tanggalPengambilan = $request->input('Tanggal_Pengambilan');
        $pelangganID = $request->input('ID_Pelanggan');
        $statusPesanan = $request->input('Status_Pesanan');
        $barangID = $request->input('ID_Barang');
        $layananID = $request->input('ID_Layanan');
        $banyakPesanan = $request->input('Banyak_Pesanan');
    
        $result = DB::select('CALL Insert_Pesanan(?, ?, ?, ?, ?, ?, ?, ?)', array(
            $pegawaiID,
            $tanggalPesanan,
            $tanggalPengambilan,
            $pelangganID,
            $statusPesanan,
            $barangID,
            $layananID,
            $banyakPesanan
        ));
    
        return redirect('pesanan')->with('status', 'Pesanan berhasil ditambahkan'); 
    }
    public function updatePesanan(Request $request)
    {
        $pesananID = $request->input('ID_Pesanan');
        $pegawaiID = $request->input('ID_Pegawai');
        $tanggalPesanan = $request->input('Tanggal_Pesanan');
        $tanggalPengambilan = $request->input('Tanggal_Pengambilan');
        $pelangganID = $request->input('ID_Pelanggan');
        $statusPesanan = $request->input('Status_Pesanan');
    
        $result = DB::select('CALL Update_Pesanan(?, ?, ?, ?, ?, ?)', array(
            $pesananID,
            $pegawaiID,
            $tanggalPesanan,
            $tanggalPengambilan,
            $pelangganID,
            $statusPesanan
        ));

        return redirect('pesanan')->with('status', 'Data Pesanan Berhasil Diperbarui');
    }
    public function deletePesanan(Request $request)
    {
        $pesananID = $request->input('ID_Pesanan');

        $result = DB::select('CALL Delete_Pesanan(?)', array($pesananID));
    
        return redirect('pesanan')->with('status', 'Data Pesanan Berhasil Dihapus');  

    }
    public function Transaksi()
    {
        $dataPesanan = DB::select("call tampilPesanan()");
        return view('transaksi', ['dataPesanan' => $dataPesanan]);  
    }
    

}