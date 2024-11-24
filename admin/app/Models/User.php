<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';  // Pastikan nama tabel sudah sesuai
    protected $primaryKey = 'id_user'; // Tentukan primary key sesuai dengan tabel Anda
    public $timestamps = true; // Jika Anda menggunakan kolom created_at dan updated_at

    protected $fillable = [
        'id_user', 'name', 'email', 'no_hp'
    ];
}
