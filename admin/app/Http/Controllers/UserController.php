<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Fungsi untuk menampilkan daftar user
    public function index()
    {
        // Ambil semua data user yang diperlukan
        $users = User::select('id_user', 'name', 'email', 'no_hp')->get();

        // Kirim data ke view
        return view('users.index', compact('users'));
    }
}
