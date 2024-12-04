<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $table = 'produks';

    protected $fillable = [
        'nama_produk', 
        'deskripsi', 
        'harga', 
        'gambar'
    ];

    // Relasi atau method tambahan jika diperlukan
}