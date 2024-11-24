<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;

class AdminAuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin.login'); // Ganti dengan view login yang sesuai
    }

    public function login(Request $request)
    {
        // Validasi input login
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Cek kredensial admin
        $admin = Admin::where('username', $request->username)->first();

        if ($admin && \Hash::check($request->password, $admin->password)) {
            // Simpan session login
            session(['admin_logged_in' => true]);

            // Redirect ke halaman welcome
            return redirect('/welcome')->with('success', 'Login berhasil!');
        }

        // Jika gagal, kembali ke halaman login dengan pesan error
        return back()->withErrors(['username' => 'Username atau password salah.']);
    }

    public function logout()
    {
        // Hapus session login
        session()->forget('admin_logged_in');

        return redirect('/admin/login')->with('success', 'Logout berhasil!');
    }
}
