<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class StatusGizi extends Model
{
    use HasFactory;

    protected $table = 'status_gizi';

    protected $fillable = [
        'nama',
        'umur',
        'jenis_kelamin',
        'berat_badan',
        'tinggi_badan',
        'status_gizi',
    ];
}
