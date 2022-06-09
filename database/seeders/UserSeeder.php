<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
           
]);
}
}
