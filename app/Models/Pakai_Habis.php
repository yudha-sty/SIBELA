<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pakai_Habis extends Model
{
    use HasFactory;
    protected $table = "ph";
    protected $fillable = [
        'no_kwph',
        'uraian_ph',
        'jumlah_ph',
        'harga_ph',
        'total_ph'
    ];
}
