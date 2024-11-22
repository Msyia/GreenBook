<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id_buku';
    public $timestamps = false;

    protected $fillable = [
        'judul', 'penulis', 'penerbit', 'tgl_terbit', 
        'bahasa', 'genre', 'halaman', 'berat', 
        'deskripsi', 'gambar',
    ];

    public function pinjamBuku()
    {
        return $this->hasMany(PinjamBuku::class, 'id_buku', 'id_buku');
    }
}
