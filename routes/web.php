<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // File welcome.blade.php harus ada
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard'); // File dashboard.blade.php harus ada
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/daftar-buku', function () {
    return view('daftar-buku'); // Pastikan file daftar-buku.blade.php ada
})->name('daftarBuku');
Route::get('/faq', function () {
    return view('faq'); // Pastikan file faq.blade.php ada
})->name('faq');


// Pastikan file auth.php ada di folder routes
require __DIR__.'/auth.php';
