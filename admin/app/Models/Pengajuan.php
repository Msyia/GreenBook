<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $table = 'pengajuan';

    protected $primaryKey = 'id_pengajuan';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'nama_user',
        'buku_id',
        'judul',
        'penulis',
        'penerbit',
        'tgl_pengajuan',
    ];
}
