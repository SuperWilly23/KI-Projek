<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $primaryKey = 'ID_Pelanggan';

    public $timestamps = false;

    protected $fillable = [
        'Nama',
        'Alamat',
        'Nomor_Telepon',
    ];
}
