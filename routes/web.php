<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', action: function () {
    return view('home');
});

Route::get('/about', action: function () {
    return view('about');
});

Route::get('/product-user', action: function () {
    return view('product-user');
});

Route::get('/contact', action: function () {
    return view('contact');
});

Route::middleware('admin')->group(function () {
    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');

    Route::get('/products', [ProductController::class, 'index'])->name('products.index');

    Route::get('/order-list', function () {
        return view('order-list');
    });

    Route::post('/create/product', [ProductController::class, 'store'])->name('products.store');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';