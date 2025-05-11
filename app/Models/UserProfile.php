<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserProfile extends Model
{
    use HasFactory;

    protected $table = 'profile_user';

    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'education',
        'job',
        'disease_history',
        'phone',
        'email',
        'address',
        'country',
        'instagram',
        'x_account',
        'facebook',
        'linkedin',
        'profile_picture'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
