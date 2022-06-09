<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('categories')->insert([
                [
                    'name'=>"کالای دیجیتال",
                    'category_id'=>null,
                    'status'=>"show"
                ],
                [
                    'name'=>"موبایل",
                    'category_id'=>1,
                    'status'=>"show"
                ],
                [
                    'name'=>"پوشاک",
                    'category_id'=>null,
                    'status'=>"show"
                ],
                [
                    'name'=>"کفش",
                    'category_id'=>3,
                    'status'=>"show"
                ],
                [
                    'name'=>"لبتاپ",
                    'category_id'=>1,
                    'status'=>"show"
                ],
                [
                    'name'=>"بلندگو",
                    'category_id'=>1,
                    'status'=>"notShow"
                ]
                    
    ]);
    }
}
