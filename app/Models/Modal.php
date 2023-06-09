<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modal extends Model
{
    use HasFactory;

    protected $table = 'modal';
    protected $fillable = [
        'no_kwmdl',
        'uraian_modal',
        'jumlah_modal',
        'harga_modal',
        'total_modal'
    ];
}