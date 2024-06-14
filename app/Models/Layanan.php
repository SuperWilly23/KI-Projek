<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;

    protected $table = 'layanan';

    protected $primaryKey = 'ID_Layanan';

    public $timestamps = false;

    protected $fillable = [
        'Nama_Layanan',
        'Harga',
    ];
}
