<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\PinjamBukuController;
use App\Http\Controllers\PengajuanController;

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


?>