<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamBukuController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\AdminAuthController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//LOGIN
Auth::routes();

Route::get('/dashboard', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');
// Route untuk halaman setelah login
Route::get('/welcome', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});


//MODIFIKASI BUKU
Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');


//MODIFIKASI PINJAM BUKU
Route::get('/pinjam_buku', [PinjamBukuController::class, 'index'])->name('pinjam_buku.index');
Route::get('/pinjam_buku/create', [PinjamBukuController::class, 'create'])->name('pinjam_buku.create');
Route::post('/pinjam_buku', [PinjamBukuController::class, 'store'])->name('pinjam_buku.store');
Route::get('/pinjam_buku/{id}/edit', [PinjamBukuController::class, 'edit'])->name('pinjam_buku.edit');
Route::put('/pinjam_buku/{id}', [PinjamBukuController::class, 'update'])->name('pinjam_buku.update');
Route::delete('/pinjam_buku/{id}', [PinjamBukuController::class, 'destroy'])->name('pinjam_buku.destroy');


//MODIFIKASI PENGAJUAN PINJAM BUKU
Route::resource('pengajuan', PengajuanController::class);
Route::get('/pengajuan/edit/{id}', [PengajuanController::class, 'edit'])->name('pengajuan.edit');
Route::post('/pengajuan/update/{id}', [PengajuanController::class, 'update'])->name('pengajuan.update');
Route::delete('/pengajuan/{id}', [PengajuanController::class, 'destroy'])->name('pengajuan.destroy');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');

Route::get('/users', [UserController::class, 'index'])->name('users.index');

//LOGIN ROUTE --------------------------------
// Route untuk halaman login admin
// Login dan Logout Admin
Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Halaman Welcome
Route::get('/welcome', function () {
    return view('welcome');
})->middleware('check.admin')->name('welcome');


?>