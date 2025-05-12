<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        $userProfile = $user->userProfile;

        return view('akun', compact('user', 'userProfile'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $userProfile = Auth::user()->userProfile;

        // Validasi data
        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'nullable|string|max:255',
            'education' => 'nullable|string|max:255',
            'job' => 'nullable|string|max:255',
            'disease_history' => 'nullable|string',
            'phone' => 'nullable|string|max:20',
            'email' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'x_account' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
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

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
