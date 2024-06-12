<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $kode = $request->input('kode');

        $pegawai = DB::table('Pegawai')
                    ->where('username', $username)
                    ->where('kode', $kode)
                    ->first();

        if ($pegawai) {
            // Jika data pegawai ditemukan, alihkan ke halaman home atau halaman lain yang diinginkan
            return redirect('home2');
        } else {
            // Jika data pegawai tidak ditemukan, kembalikan ke halaman login dengan pesan error
            return redirect('/login')->with('error', 'Kombinasi Username dan Kode tidak valid');
        }
    }
}
