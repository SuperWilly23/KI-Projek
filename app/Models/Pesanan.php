<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $primaryKey = 'ID_Pesanan';

    public $timestamps = false;

    protected $fillable = [
        'ID_Pegawai',
        'Tanggal_Pesanan',
        'Tanggal_Pengambilan',
        'ID_Pelanggan',
        'Status_Pesanan',
    ];
}
