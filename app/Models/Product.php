<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_image',
        'product_name',
        'product_price',
        'product_stock',
        'product_location',
    ];

    public function orders()
    {
        return $this->hasMany(Orders::class, 'product_id', 'product_id');
    }
}
