<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('products')->insert([
            [
                'name'=>"موبایل سامسونگ",
                'category_id'=>2,
                'price'=>1000,
                'available_number'=>50,
                'sold_number'=>27,
                'seen_number'=>512
            ],
            [
                'name'=>"موبایل ال جی ",
                'category_id'=>2,
                'price'=>2000,
                'available_number'=>60,
                'sold_number'=>37,
                'seen_number'=>112
            ],
            [
                'name'=>"لپ تاپ سامسونگ",
                'category_id'=>5,
                'price'=>1500,
                'available_number'=>27,
                'sold_number'=>10,
                'seen_number'=>212
            ],
            [
                'name'=>"کفش نایک",
                'category_id'=>4,
                'price'=>3000,
                'available_number'=>40,
                'sold_number'=>30,
                'seen_number'=>150
            ]

                
]);
    }
}
