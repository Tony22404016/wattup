<?php

use App\Http\Controllers\RegisController;
use Illuminate\Support\Facades\Route;

//rute untuk home page
Route::get('/', function () {
    return view('Home');
});

// tampilkan form register
Route::get('/regis', [RegisController::class, 'create'])->name('register.form');

// kirim data user ke database
Route::post('/regis', [RegisController::class, 'store'])->name('register.store');
