<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'konsul'; // nama tabel
    protected $fillable = [
        'user_id',
        'full_name',
        'email',
        'jenis_konsultasi',
        'tanggal_konsultasi',
        'umur',
        'keluhan',
        'status', // masukkan status agar bisa diisi manual juga jika perlu
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
