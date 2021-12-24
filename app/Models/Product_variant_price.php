<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_variant_price extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_variant_one',
        'product_variant_two',
        'product_variant_three',
        'price',
        'stock',
        'product_id'

    ];

    public function Product()
    {
        return $this->belongsTo(Product::class);
    }

    public function ProductVariant()
    {
        return $this->belongsTo(Product_variant::class);
    }

}
