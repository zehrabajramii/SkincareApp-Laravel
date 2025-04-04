<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'is_admin', 
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin' => 'boolean', // Cast is_admin as a boolean instead of 1/0
    ];

    // ✅ Define isAdmin() method to check if the user is an admin
    public function isAdmin()
    {
        return $this->role === 'admin'; //database has a 'role' column
    }
    
}
