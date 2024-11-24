<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    // Menampilkan daftar feedback
    public function index()
    {
        // Ambil semua data dari tabel feedback
        $feedbacks = Feedback::all();

        // Kirim data ke view
        return view('feedback.index', compact('feedbacks'));
    }
}
