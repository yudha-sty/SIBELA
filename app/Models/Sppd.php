<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sppd extends Model
{
    use HasFactory;

    protected $table = "sppd";
    protected $fillable = [
        'jenis_sppd',
        'no_kwsppd',
        'uraian_sppd',
        'kendaraan',
        'harga_t',
        'penginapan',
        'harga_p',
        'harian',
        'representasi',
        'hari',
        'total'
    ];
}
