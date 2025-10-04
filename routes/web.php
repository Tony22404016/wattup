<?php

use App\Http\Controllers\RegisController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisAdminController;
use App\Http\Controllers\LoginAdminController;
use Illuminate\Support\Facades\Route;

//menampilkan data produk di home page
Route::get('/', [ProductController::class, 'home'])->name('product.home');
Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');

// data user
Route::delete('/user/{destroy}', [RegisController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{id}/edit-status', [RegisController::class, 'edit'])->name('user.edit');
Route::put('/user/{id}', [RegisController::class, 'update'])->name('user.update');



//Login User
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.submit')->middleware('guest');
Route::get('/regis', [RegisController::class, 'create'])->name('register.form');
Route::post('/regis', [RegisController::class, 'store'])->name('register.store');

//login Admin
Route::get('/Admin/Regis', [RegisAdminController::class, 'create'])->name('AdminRegister.form');
Route::post('/Admin/Regis', [RegisAdminController::class, 'store'])->name('AdminRegister.store');
Route::get('/Admin/Login', [LoginAdminController::class, 'showLoginForm'])->name('LoginAdmin');
Route::post('/Admin/Login', [LoginAdminController::class, 'login'])->name('LoginAdmin.submit');

//data Admin
Route::delete('/admin/{destroy}', [RegisAdminController::class, 'destroy'])->name('admin.destroy');


//data order
Route::get('/order/{id}/edit-status', [OrderController::class, 'edit'])->name('order.edit');
Route::delete('/order/{destroy}', [OrderController::class, 'destroy'])->name('order.destroy');
Route::put('/order/{id}', [OrderController::class, 'update'])->name('order.update');


//data produk
Route::get('/addProduct', [ProductController::class, 'create'])->name('product.form');
Route::post('/addProduct', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{id}/edit-product', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/{id}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/product/{destroy}', [ProductController::class, 'destroy'])->name('product.destroy');


//autentikasi route
Route::middleware(['auth:web'])->group(function () { 
    Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');
    Route::get('/checkout/{id}', [OrderController::class, 'create'])->name('checkout.form');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/product', [ProductController::class, 'index'])->name('product.index');
    Route::get('/orders', [OrderController::class, 'index'])->name('order.index');
    Route::get('/users', [RegisController::class, 'index'])->name('user.index');
    Route::get('/admins', [RegisAdminController::class, 'index'])->name('admin.index');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

