<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PinjamBuku; // Pastikan model di-import

class PinjamBukuSeeder extends Seeder
{
    public function run()
    {
        PinjamBuku::create([
            'id_buku' => 1, // ID buku yang sesuai
            'id_user' => 1, // ID user yang sesuai
            'tgl_pinjam' => '2024-11-20',
            'tgl_kembali' => null,
            'denda' => 0,
        ]);
    }
}
