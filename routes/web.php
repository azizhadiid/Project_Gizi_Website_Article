<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ArtikelController;

// Akses Landing Page 
Route::get('/', function () {
    return view('welcome');
});

// Khusu User
Route::get('/beranda', [HomeController::class, 'index']);
Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
Route::post('/akun', [AkunController::class, 'update'])->name('akun.update');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/artikel', [ArtikelController::class, 'index'])->name('user.artikel');

// Khusu Admin
Route::get('/dashboard', [AdminController::class, 'index']);
Route::get('/akun/admin', [AdminProfileController::class, 'index'])->name('admin.profile.show');
Route::post('/admin/admin', [AdminProfileController::class, 'update'])->name('admin.profile.update');
Route::get('/admin/artikel/tambah', [ArtikelController::class, 'create'])->name('artikel.create');
Route::post('/admin/artikel/simpan', [ArtikelController::class, 'store'])->name('artikel.store');
Route::get('/admin/artikel/edit', [ArtikelController::class, 'show'])->name('artikel.index');
Route::get('/admin/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
Route::put('/admin/artikel/{id}', [ArtikelController::class, 'updateArtikel'])->name('artikel.update');
Route::delete('/admin/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');


// Khusu Auth
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'store']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/create', [AuthController::class, 'create']);
Route::get('/forgot-password', [AuthController::class, 'forgotPassword']);
Route::get('/reset-password', [AuthController::class, 'resetPassword']);
