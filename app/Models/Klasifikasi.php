<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    use HasFactory;
    protected $table = "klasifikasi";

    protected $fillable = [
        'nama_klasifikasi',
        'kode_rekening',
        'nama_rekening',
        'user_id',
        'id_kegiatan',
    ];
}
