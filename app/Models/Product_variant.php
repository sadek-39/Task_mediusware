<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_variant extends Model
{
    use HasFactory;

    protected $fillable=[
        'variant',
        'variant_id',
        'product_id'
    ];


    public function Product()
    {
        return $this->hasMany(Product_variant_price::class);
    }

    public function Variant()
    {
        return $this->belongsTo(Variant::class);
    }
}
