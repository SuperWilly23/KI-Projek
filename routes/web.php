<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelangganController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/baibai', function () {
    return view('welcome');
});
Route::get('/home2', function () {
    return view('home');
});
Route::get('update', function (){
    return view('update');
});
Route::get('delete', function (){
    return view('delete');
});
Route::get('updatepesanan', function (){
    return view('updatepesanan');
});
Route::get('deletepesanan', function (){
    return view('deletepesanan');
});


Route::get('pelanggan',[PelangganController::class, 'data']);
Route::get('add',[App\Http\Controllers\PelangganController::class, 'addPelanggan']);
Route::post('pelanggan',[App\Http\Controllers\PelangganController::class, 'addProcess']);

Route::post('update/pelanggan',[App\Http\Controllers\PelangganController::class, 'updatePelanggan']);
Route::post('delete/pelanggan',[App\Http\Controllers\PelangganController::class, 'deletePelanggan']);
Route::get('pesanan',[App\Http\Controllers\PelangganController::class, 'pesananPelanggan']);
Route::get('addpesanan',[App\Http\Controllers\PelangganController::class, 'addPesanan']);
Route::post('addpesanan/add',[App\Http\Controllers\PelangganController::class, 'addPP']);
Route::post('updatepesanan/update',[App\Http\Controllers\PelangganController::class, 'updatePesanan']);
Route::post('deletepesanan/delete',[App\Http\Controllers\PelangganController::class, 'deletePesanan']);
Route::get('transaksi',[App\Http\Controllers\PelangganController::class, 'Transaksi']);
Route::get('welcome',[App\Http\Controllers\PelangganController::class, 'Welcome']);
Route::get('layanan',[App\Http\Controllers\PelangganController::class, 'layananPelanggan']);
Route::get('barang',[App\Http\Controllers\PelangganController::class, 'barangPelanggan']);



// Rute untuk menampilkan form login
Route::get('/', [LoginController::class, 'showLoginForm']);

// Rute untuk mengirimkan data login (ID Pegawai)
Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');




