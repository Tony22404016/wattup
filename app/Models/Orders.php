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
    protected $primaryKey = 'order_id';

    //kolom yang bisa diisi (fillable)
    protected $fillable = [
        'customer_name',
        'product_name',
        'home_address',
        'date',
        'whatsapp_number',
        'status',
    ];

    public $timestamps = false;
}
