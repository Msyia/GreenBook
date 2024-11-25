<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Validator;

class RegisterController extends Controller
{
    // Menampilkan halaman register
    public function create()
    {
        return view('auth.register');
    }

    // Menangani pendaftaran
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'no_hp' => 'required|String|max:15',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Proses pendaftaran
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('password'));  // Hash password sebelum disimpan
        $user->no_hp = $request->input('no_hp');
        $user->save();

        // Redirect ke halaman login setelah berhasil daftar
        return redirect()->route('login')->with('success', 'Pendaftaran berhasil, silakan login!');
    }
}
