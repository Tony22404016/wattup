<?php

namespace App\Models;

// Impor trait yang diperlukan untuk Otentikasi
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable; // Import base class User
use Illuminate\Notifications\Notifiable;

// Ganti 'Model' dengan 'Authenticatable' agar Model ini bisa digunakan untuk Login
class Regis extends Authenticatable
{
    use HasFactory, Notifiable; 

    // Nama tabel yang sudah ada di database
    protected $table = 'users';

    // Kolom primary key (default 'id', kita sesuaikan)
    protected $primaryKey = 'user_id';

    // Kolom yang bisa diisi (fillable)
    protected $fillable = [
        'username',
        'password',
        'status',
    ];

    protected $hidden = [
        'password',
    ];
}