<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'articles';

    protected $fillable = [
        'profile_admin_id',
        'title',
        'penulis',
        'content',
        'cover_image',
        'status',
        'published_at',
    ];


    public function adminProfile()
    {
        return $this->belongsTo(AdminProfile::class, 'profile_admin_id');
    }
}
