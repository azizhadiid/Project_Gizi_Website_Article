<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('status');
    }

    /**
     * Show the form for creating a new resource.
     */
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

        return view('status', [
            'data' => $validated,
            'status_gizi' => $status
        ]);
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
