<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Buku;
use App\Models\Pengajuan;
use Illuminate\Http\Request;

class PengajuanController extends Controller
{
    // Fungsi untuk menampilkan daftar pengajuan
    public function index()
    {
        // Ambil semua data pengajuan
        $pengajuan = Pengajuan::all();

        // Kirim data ke view
        return view('pengajuan.index', compact('pengajuan'));
    }

    // Fungsi untuk menampilkan form tambah pengajuan
    public function create()
    {
        $users = User::all(); // Ambil data semua user
        $buku = Buku::all();  // Ambil data semua buku

        return view('pengajuan.create', compact('users', 'buku'));
    }

    // Fungsi untuk menyimpan data pengajuan
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'user_id' => 'required|exists:users,id_user',
            'buku_id' => 'required|exists:buku,id_buku',
        ]);

        // Ambil data user dan buku yang dipilih
        $user = User::find($request->user_id);
        $buku = Buku::find($request->buku_id);

        // Simpan data pengajuan
        Pengajuan::create([
            'user_id' => $request->user_id,
            'nama_user' => $user->name,
            'buku_id' => $request->buku_id,
            'judul' => $buku->judul,
            'penulis' => $buku->penulis,
            'penerbit' => $buku->penerbit,
            'tgl_pengajuan' => now(),
        ]);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pengajuan.index')->with('success', 'Pengajuan berhasil ditambahkan!');
    }
}
