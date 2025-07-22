<?php

namespace App\Http\Controllers;

use App\Models\StatusGizi;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    // Memanggil display blade status gizi
    public function index()
    {
        return view('status');
    }

    // Method untuk mellakukan cek status
    public function cekStatus(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'umur' => 'required|integer|min:0',
            'jenis_kelamin' => 'required|in:L,P',
            'berat_badan' => 'required|numeric|min:0',
            'tinggi_badan' => 'required|numeric|min:0',
        ]);

        // Contoh logika sederhana berdasarkan indeks massa tubuh (IMT)
        $tinggi_m = $validated['tinggi_badan'] / 100;
        $imt = $validated['berat_badan'] / ($tinggi_m * $tinggi_m);

        if ($imt < 17) {
            $status = 'Sangat Kurus';
        } elseif ($imt < 18.5) {
            $status = 'Kurus';
        } elseif ($imt < 25) {
            $status = 'Normal';
        } elseif ($imt < 27) {
            $status = 'Gemuk';
        } else {
            $status = 'Obesitas';
        }

        // Simpan ke database
        StatusGizi::create([
            'nama' => $validated['nama'],
            'umur' => $validated['umur'],
            'jenis_kelamin' => $validated['jenis_kelamin'],
            'berat_badan' => $validated['berat_badan'],
            'tinggi_badan' => $validated['tinggi_badan'],
            'status_gizi' => $status,
        ]);

        return view('status', [
            'data' => $validated,
            'status_gizi' => $status
        ]);
    }
}
