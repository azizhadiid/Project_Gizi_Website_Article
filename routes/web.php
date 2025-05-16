<?php

use App\Http\Controllers\AboutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminProfileController;
use App\Http\Controllers\ArtikelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

// Khusu User
Route::get('/beranda', [HomeController::class, 'index']);
Route::get('/akun', [AkunController::class, 'index'])->name('akun.index');
Route::post('/akun', [AkunController::class, 'update'])->name('akun.update');
Route::post('/profile/change-password', [AuthController::class, 'changePassword'])->name('profile.change-password');
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
Route::get('/admin/artikel/search', [ArtikelController::class, 'search'])->name('artikel.search');


Route::get('/logout', [AuthController::class, 'logout']);


// Khusu Auth
Route::middleware(['guest'])->group(function () {
    // Akses Landing Page 
    Route::get('/', function () {
        return view('welcome');
    });

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
});
