<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products'; // Connects to 'products' table from DB

    protected $fillable = [  //product create or update , only allows name, description, price, and image to be saved on database.
        'name',
        'description',
        'price',
        'image',
    ];

    // 🔹 Ensure proper casting for price (to prevent string storage issues)
    protected $casts = [
        'price' => 'decimal:2', // Ensure price is stored as a decimal with 2 places , connects to price table from DB
    ];
}
