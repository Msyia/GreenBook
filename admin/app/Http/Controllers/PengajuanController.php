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

    public function edit($id)
    {
        $pengajuan = Pengajuan::findOrFail($id);
        $users = User::all(); // Untuk dropdown user_id
        $buku = Buku::all();  // Untuk dropdown buku_id

        return view('pengajuan.edit', compact('pengajuan', 'users', 'buku'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id_user',
            'buku_id' => 'required|exists:buku,id_buku',
        ]);
    
        $pengajuan = Pengajuan::findOrFail($id);
        $pengajuan->user_id = $request->user_id;
        $pengajuan->buku_id = $request->buku_id;
    
        // Perbarui nama_user, judul, penulis, dan penerbit berdasarkan user_id dan buku_id
        $user = User::find($request->user_id);
        $buku = Buku::find($request->buku_id);
    
        $pengajuan->nama_user = $user->name;
        $pengajuan->judul = $buku->judul;
        $pengajuan->penulis = $buku->penulis;
        $pengajuan->penerbit = $buku->penerbit;
    
        $pengajuan->save();
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pengajuan.index')->with('success', 'Data pengajuan berhasil diperbarui.');
    }


    public function destroy($id)
    {
        // Cari data pengajuan berdasarkan ID
        $pengajuan = Pengajuan::findOrFail($id);

        // Hapus data
        $pengajuan->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('pengajuan.index')->with('success', 'Data pengajuan berhasil dihapus.');
    }
    
    
}
?>
