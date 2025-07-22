<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function kirim(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'body' => $request->message,
        ];

        Mail::to('azizalhadiid88@gmail.com')->send(new \App\Mail\KontakMail($data));

        return back()->with('success', 'Pesan berhasil dikirim.');
    }
}
