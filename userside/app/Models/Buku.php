<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari default (plural dari model)
    protected $table = 'bukus'; 

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tgl_terbit',
        'bahasa',
        'genre',
        'halaman',
        'berat',
        'deskripsi',
        'gambar',
    ];
}
