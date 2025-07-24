<?php

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Password;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use Illuminate\Auth\Events\PasswordReset;
use App\Http\Controllers\KonsulController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AdminProfileController;

// Khusu User
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/beranda', [HomeController::class, 'index']);
    Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
    Route::post('/akun', [AkunController::class, 'update'])->name('akun.update');
    Route::post('/profile/change-password', [AuthController::class, 'changePassword'])->name('profile.change-password');
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('user.artikel');
    Route::get('/artikel/baca/{id}', [ArtikelController::class, 'baca'])->name('artikel.baca');
    Route::get('/status', [StatusController::class, 'index'])->name('status.index');
    Route::post('/status/cek', [StatusController::class, 'cekStatus'])->name('status.cek');
    Route::get('/konsul', [KonsulController::class, 'index'])->name('konsul.index');
    Route::post('/konsul', [KonsulController::class, 'store'])->name('konsultasi.store');
});


// Khusu Admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index']);
    Route::get('/akun/admin', [AdminProfileController::class, 'index'])->name('admin.profile.show');
    Route::post('/admin/admin', [AdminProfileController::class, 'update'])->name('admin.profile.update');
    Route::get('/admin/artikel/tambah', [ArtikelController::class, 'create'])->name('artikel.create');
    Route::post('/admin/artikel/simpan', [ArtikelController::class, 'store'])->name('artikel.store');
    Route::get('/admin/artikel/edit', [ArtikelController::class, 'show'])->name('artikel.index');
    Route::get('/admin/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
    Route::put('/admin/artikel/{id}', [ArtikelController::class, 'updateArtikel'])->name('artikel.update');
    Route::delete('/admin/artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
    Route::get('/admin/artikel/search', [ArtikelController::class, 'search'])->name('artikel.search');
    Route::get('/admin/konsul', [KonsulController::class, 'admin'])->name('adminKonsul.index');
    Route::put('/admin/konsul/{id}/update-status', [KonsulController::class, 'updateStatus'])->name('adminKonsul.updateStatus');
});

Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/admin/logout', [AuthController::class, 'logout']);

// Khusu Auth

// Akses Landing Page dan About page
Route::get('/', [WelcomeController::class, 'index'])->name('welcome'); 
// Route untuk kirim pesan di footer
Route::post('/kontak/kirim', [KontakController::class, 'kirim'])->name('kontak.kirim');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'store']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/register/create', [AuthController::class, 'create']);
Route::get('/forgot-password', function () {
    return view('auth.forgotPassword');
})->name('password.request');
Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);

    $status = Password::sendResetLink(
        $request->only('email')
    );

    return $status === Password::ResetLinkSent
        ? back()->with(['status' => __($status)])
        : back()->withErrors(['email' => __($status)]);
})->name('password.email');
Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.resetPassword', ['token' => $token]);
})->name('password.reset');
Route::post('/reset-password', function (Request $request) {
    $request->validate([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]);

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );

    return $status === Password::PasswordReset
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->name('password.update');
Route::get('/reset-password', [AuthController::class, 'resetPassword']);
