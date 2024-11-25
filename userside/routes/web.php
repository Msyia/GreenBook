<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('beranda');
})->middleware('auth')->name('beranda');

Route::get('/beranda-after-login', function () {
    return view('berandaAfterLogin');  // Tampilkan halaman beranda setelah login
})->name('beranda.after.login');  // Nama rute yang sesuai

Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');

//BUKU



Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register', [RegisterController::class, 'store']);


Route::get('/profile', function () {
    return view('profile');
})->name('profile');
