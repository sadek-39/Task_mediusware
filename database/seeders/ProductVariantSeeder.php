<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_variants')->insert([
            [
                'id'=>1,
                'variant'=>'red',
                'variant_id'=>1,
                'product_id'=>1
            ],
            [
                'id'=>2,
                'variant'=>'green',
                'variant_id'=>1,
                'product_id'=>1
            ],
            [
                'id'=>3,
                'variant'=>'blue',
                'variant_id'=>1,
                'product_id'=>1
            ],
            [
                'id'=>4,
                'variant'=>'xl',
                'variant_id'=>2,
                'product_id'=>1
            ],
            [
                'id'=>5,
                'variant'=>'sm',
                'variant_id'=>2,
                'product_id'=>1
            ],
            [
                'id'=>6,
                'variant'=>'m',
                'variant_id'=>2,
                'product_id'=>1
            ],
            [
                'id'=>7,
                'variant'=>'XL',
                'variant_id'=>2,
                'product_id'=>1
            ],
            [
                'id'=>8,
                'variant'=>'L',
                'variant_id'=>2,
                'product_id'=>1
            ],
            [
                'id'=>9,
                'variant'=>'red',
                'variant_id'=>1,
                'product_id'=>2
            ],
        ]);
    }
}
