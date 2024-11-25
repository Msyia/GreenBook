<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'feedback' => 'required|string',
        ]);

        // Simpan data ke tabel feedback
        Feedback::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'feedback' => $request->feedback,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->back()->with('success', 'Feedback Anda telah berhasil disimpan.');
    }
}
