<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    //nama tabel yang sudah ada di database
    protected $table = 'orders';

    //kolom primary key (default 'id', kita sesuaikan)
    protected $primaryKey = 'user_id';

    //kolom yang bisa diisi (fillable)
    protected $fillable = [
        'username',
        'password',
    ];
}
