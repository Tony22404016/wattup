<?php

use App\Http\Controllers\RegisController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//menampilkan data produk di home page
Route::get('/', [ProductController::class, 'home'])->name('product.home');

// tampilkan form register
Route::get('/regis', [RegisController::class, 'create'])->name('register.form');

// kirim data user ke database
Route::post('/regis', [RegisController::class, 'store'])->name('register.store');

//menampilkan data user
Route::get('/users', [RegisController::class, 'index'])->name('user.index');

//menghapus data user
Route::delete('/user/{destroy}', [RegisController::class, 'destroy'])->name('user.destroy');

//menampilkan form edit status
Route::get('/user/{id}/edit-status', [RegisController::class, 'edit'])->name('user.edit');

// Mengupdate status user
Route::put('/user/{id}', [RegisController::class, 'update'])->name('user.update');



//menampilkan form login user
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

//mengirim data login user
Route::post('/login', [LoginController::class, 'login'])->name('login.submit');


//menampilkan data order
Route::get('/orders', [OrderController::class, 'index'])->name('order.index');

//menampilkan form checkout
Route::get('/checkout', [OrderController::class, 'create'])->name('checkout.form');

// kirim data user ke database
Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');

//menampilkan form edit status
Route::get('/order/{id}/edit-status', [OrderController::class, 'edit'])->name('order.edit');

//menghapus data user
Route::delete('/order/{destroy}', [OrderController::class, 'destroy'])->name('order.destroy');

// Mengupdate status user
Route::put('/order/{id}', [OrderController::class, 'update'])->name('order.update');


//menampilkan data produk
Route::get('/product', [ProductController::class, 'index'])->name('product.index');

Route::get('/addProduct', [ProductController::class, 'create'])->name('product.form');

Route::post('/addProduct', [ProductController::class, 'store'])->name('product.store');

Route::get('/product/{id}/edit-product', [ProductController::class, 'edit'])->name('product.edit');

Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');

Route::delete('/product/{destroy}', [ProductController::class, 'destroy'])->name('product.destroy');


