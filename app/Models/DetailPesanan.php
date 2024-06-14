<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailPesanan extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $primaryKey = 'ID_Barang';

    public $timestamps = false;

    protected $fillable = [
        'Harga_Cuci_Barang',
        'Jenis_Barang',
    ];
}
