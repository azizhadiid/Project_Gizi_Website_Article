<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $userProfile = $user->userProfile;

        return view('akun', compact('user', 'userProfile'));
    }

    public function update(Request $request)
    {
        $userProfile = Auth::user()->userProfile;

        // Validasi data
        $request->validate([
            'education' => 'nullable|string|max:255',
            'job' => 'nullable|string|max:255',
            'disease_history' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'x_account' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'profile_picture.image' => 'Foto profil harus berupa gambar.',
            'profile_picture.mimes' => 'Format gambar harus jpeg, png, atau jpg.',
            'profile_picture.max' => 'Ukuran gambar maksimal 2MB.',
            'phone.max' => 'Nomor telepon maksimal 20 karakter.',
        ]);

        // Update atau buat data profil
        if (!$userProfile) {
            $userProfile = new UserProfile();
            $userProfile->user_id = Auth::id();
        }

        $userProfile->fill($request->except('profile_picture'));

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Hapus gambar lama jika ada
            if (!empty($adminProfile->profile_picture) && file_exists(public_path('img/user/profile' . $userProfile->profile_picture))) {
                unlink(public_path('img/user/profile' . $userProfile->profile_picture));
            }

            // Simpan gambar baru
            $file->move(public_path('img/user/profile'), $filename);

            // Simpan nama file ke database
            $userProfile->profile_picture = $filename;
        }

        // Simpan profile
        $userProfile->save();

        return redirect()->route('akun.index')->with('success', 'Profile updated successfully.');
    }
}
