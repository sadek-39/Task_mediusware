<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Variant extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'description'
    ];

    public function productVariant()
    {
        return $this->hasOne(Product_variant::class);
    }
}
