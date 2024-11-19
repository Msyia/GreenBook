<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = 'buku'; // Menentukan nama tabel jika berbeda

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
    ];
}
