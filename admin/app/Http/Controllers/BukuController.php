<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all(); // Mengambil semua data dari tabel buku
        return view('buku.index', compact('buku')); // Mengirimkan data ke view
    }

    public function create()
    {
        return view('buku.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tgl_terbit' => 'required|date',
            'bahasa' => 'required',
            'genre' => 'required',
            'halaman' => 'required|integer',
            'berat' => 'required|numeric',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $gambarPath = null;
        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('images/buku', 'public');
        }

        Buku::create([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tgl_terbit' => $request->tgl_terbit,
            'bahasa' => $request->bahasa,
            'genre' => $request->genre,
            'halaman' => $request->halaman,
            'berat' => $request->berat,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
        ]);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $buku = Buku::findOrFail($id); // Cari buku berdasarkan ID
        return view('buku.edit', compact('buku')); // Kirim data ke view
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tgl_terbit' => 'required|date',
            'bahasa' => 'required',
            'genre' => 'required',
            'halaman' => 'required|integer',
            'berat' => 'required|numeric',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|max:2048',
        ]);

        $buku = Buku::findOrFail($id);

        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($buku->gambar && file_exists(storage_path('app/public/' . $buku->gambar))) {
                unlink(storage_path('app/public/' . $buku->gambar));
            }
            $gambarPath = $request->file('gambar')->store('images/buku', 'public');
            $buku->gambar = $gambarPath;
        }

        $buku->update([
            'judul' => $request->judul,
            'penulis' => $request->penulis,
            'penerbit' => $request->penerbit,
            'tgl_terbit' => $request->tgl_terbit,
            'bahasa' => $request->bahasa,
            'genre' => $request->genre,
            'halaman' => $request->halaman,
            'berat' => $request->berat,
            'deskripsi' => $request->deskripsi,
        ]);

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $buku = Buku::findOrFail($id); // Cari buku berdasarkan ID

        // Hapus gambar jika ada
        if ($buku->gambar && file_exists(storage_path('app/public/' . $buku->gambar))) {
            unlink(storage_path('app/public/' . $buku->gambar));
        }

        $buku->delete(); // Hapus data dari database

        return redirect()->route('buku.index')->with('success', 'Data buku berhasil dihapus.');
    }
}
