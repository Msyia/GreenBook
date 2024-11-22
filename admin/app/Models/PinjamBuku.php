<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PinjamBuku extends Model
{
    use HasFactory;

    protected $table = 'pinjam_buku';
    protected $primaryKey = 'id_pinjam';
    public $incrementing = true;
    protected $keyType = 'int';

    protected $fillable = [
        'id_buku',
        'user_id',
        'tgl_pinjam',
        'tgl_kembali',
        'denda',
        'judul',
        'nama',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id_user');
    }

    public function buku()
    {
        return $this->belongsTo(Buku::class, 'id_buku', 'id_buku');
    }
}
