<?php

namespace App\Http\Controllers;

use App\Models\AdminProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    // Menampilkan halaman profile admin
    public function index()
    {
        $admin = Auth::user()->admin; // Mengambil admin profile dari user yang login
        return view('admin.akun', compact('admin'));
    }

    // Melakukan update profile admin
    public function update(Request $request)
    {
        $adminProfile = Auth::user()->adminProfile;

        // Validasi data
        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'email' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:100',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'experience' => 'nullable|string|max:100',
            'note' => 'nullable|string|max:255',
        ]);

        // Update atau buat data profil
        if (!$adminProfile) {
            $adminProfile = new AdminProfile();
            $adminProfile->user_id = Auth::id();
        }

        $adminProfile->fill($request->except('profile_picture'));

        if ($request->hasFile('profile_picture')) {
            $file = $request->file('profile_picture');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            // Hapus gambar lama jika ada
            if (!empty($adminProfile->profile_picture) && file_exists(public_path('img/admin/profile' . $adminProfile->profile_picture))) {
                unlink(public_path('img/admin/profile' . $adminProfile->profile_picture));
            }

            // Simpan gambar baru
            $file->move(public_path('img/admin/profile'), $filename);

            // Simpan nama file ke database
            $adminProfile->profile_picture = $filename;
        }

        // Simpan profile
        $adminProfile->save();

        return redirect()->route('admin.profile.show')->with('success', 'Profile updated successfully.');
    }
}
