<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users'; // Nama tabel
    protected $primaryKey = 'id_user'; // Nama kolom primary key

    protected $fillable = ['id_user', 'name', 'password', 'email', 'no_hp'];

    protected $hidden = [
        'password', 'remember_token',
    ];
}

