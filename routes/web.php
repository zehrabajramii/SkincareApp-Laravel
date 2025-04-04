<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Redirect root '/' to the User Dashboard
Route::get('/', function () {
    return redirect()->route('dashboard');
});
//Controllers fetches data from models and it passes them to bladeview
// Make User Dashboard Public (No Login Required)
Route::get('/dashboard', [ProductController::class, 'userIndex'])->name('dashboard');

// Allow Guests & Users to View Products Without Login
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Restrict Admin Dashboard to Logged-in Admins Only
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [ProductController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/products/create', [ProductController::class, 'create'])->name('products.create'); 
    Route::resource('products', ProductController::class)->except(['show']);
});

// Profile Routes These routes are only accessible after login
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include Authentication Routes
require __DIR__.'/auth.php';
