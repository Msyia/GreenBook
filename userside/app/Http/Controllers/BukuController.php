<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function index()
    {
        $bukus = Buku::all(); // Mengambil semua data buku dari database
        return view('buku.index', compact('bukus'));
    }
}
class HomeController extends Controller
{
    public function index()
    {
        $buku = Buku::all(); // Mengambil semua data buku dari database
        return view('welcome', compact('buku')); // Kirim data ke view
    }
}