<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback'; // Nama tabel
    protected $fillable = ['nama', 'email', 'feedback']; // Kolom yang dapat diisi
}