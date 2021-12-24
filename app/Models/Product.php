<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sku',
        'description',
    ];

    public function ProductpriceVariant()
    {
        return $this->hasOne(Product_variant_price::class)->with('Product');
    }

    

}
