<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductVariantPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_variant_prices')->insert([
            [
                'id'=>1,
                'product_variant_one'=>1,
                'product_variant_two'=>4,
                'product_variant_three'=>null,
                'price'=>150,
                'stock'=>150,
                'product_id'=>1
                
            ],
            [
                'id'=>2,
                'product_variant_one'=>4,
                'product_variant_two'=>2,
                'product_variant_three'=>null,
                'price'=>15,
                'stock'=>15,
                'product_id'=>2
                
            ]

        ]);
    }
}
