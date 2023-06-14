<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jasa extends Model
{
    use HasFactory;

    protected $table = "jasa";

    protected $fillable = [
        'no_kwjs',
        'uraian_jasa',
        'jumlah_jasa',
        'harga_jasa',
        'total_jasa'
    ];
}
