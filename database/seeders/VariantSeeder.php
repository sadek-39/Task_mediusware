<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VariantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('variants')->insert([
            [
                'id'=>1,
                'title'=>'color',
                'description'=>'assadaedwe'
            ],
            [
                'id'=>2,
                'title'=>'size',
                'description'=>'assadaedwe'
            ],
            [
                'id'=>3,
                'title'=>'style',
                'description'=>'description'
            ]

        ]);
    }
}
