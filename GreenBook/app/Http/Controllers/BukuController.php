<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        $buku = Buku::all(); // Mengambil semua data buku
        return view('buku.index', compact('buku'));
    }

    // Menampilkan form untuk menambah buku
    public function create()
    {
        return view('buku.create');
    }

    // Menambah buku baru
    public function store(Request $request)
    {
        // Validasi data buku
        $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tgl_terbit' => 'required|date',
            'bahasa' => 'required|string|max:100',
            'genre' => 'required|string|max:100',
            'halaman' => 'required|integer',
            'berat' => 'required|numeric',
            'deskripsi' => 'nullable|string',
        ]);

        // Menyimpan data buku ke dalam database
        Buku::create($request->all());

        return redirect()->route('buku.index');
    }

    // Menghapus buku
    public function destroy($id)
    {
        Buku::findOrFail($id)->delete();
        return redirect()->route('buku.index');
    }

    // Mencari buku berdasarkan judul atau penulis
    public function search(Request $request)
    {
        // Ambil query pencarian dari input pengguna
        $searchQuery = $request->input('search');
        
        // Cari buku berdasarkan judul atau penulis
        $buku = Buku::where('judul', 'like', '%' . $searchQuery . '%')
                    ->orWhere('penulis', 'like', '%' . $searchQuery . '%')
                    ->get();
        
        // Kirim hasil pencarian ke view
        return view('beranda', compact('buku'));
    }
}
