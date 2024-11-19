<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\FaqController;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
| These routes are loaded by the RouteServiceProvider and all of them
| will be assigned to the "web" middleware group. Make something great!
|
*/

// Route untuk halaman utama
Route::get('/', function () {
    return view('welcome');
});

// Route untuk halaman dashboard dengan middleware auth dan verified
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route untuk profil pengguna yang terautentikasi
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk login dan logout
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk FAQ
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// Route untuk buku
Route::prefix('buku')->name('buku.')->group(function () {
    Route::get('/', [BukuController::class, 'index'])->name('index');
    Route::get('/create', [BukuController::class, 'create'])->name('create');
    Route::post('/', [BukuController::class, 'store'])->name('store');
    Route::get('/insert', function () {
        return view('buku.insert'); // Pastikan file 'buku.insert' ada di resources/views/
    })->name('insert');
    Route::get('/search', [BukuController::class, 'search'])->name('search');
    Route::delete('/{id}', [BukuController::class, 'destroy'])->name('destroy');
});

// Route untuk daftar buku
Route::get('/daftar-buku', function () {
    return view('daftar-buku'); // Pastikan file 'daftar-buku.blade.php' ada di resources/views/
})->name('daftarBuku');

// Register authentication routes
require __DIR__.'/auth.php';
