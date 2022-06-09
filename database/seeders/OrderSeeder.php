<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // for ($i=0; $i <4 ; $i++) { 
        //     DB::table('categories')->insert([
        //         'name'=>Str::random(6),
        //         'status'=>Arr::random(['show','notShow']),
                
               
               
        //     ]);

        // }

        DB::table('orders')->insert([
             [
                 
                 "user_id"=>2,
                 "product_id"=>4,
                 'order_number'=>3,
                 'total_price'=>9000,
             ],
             [
                 
                 "user_id"=>3,
                 "product_id"=>3,
                 'order_number'=>9,
                 'total_price'=>13500,
             ],
             [
                 
                 "user_id"=>2,
                 "product_id"=>1,
                 'order_number'=>2,
                 'total_price'=>2000,
             ],
             [
                 
                 "user_id"=>1,
                 "product_id"=>2,
                 'order_number'=>10,
                 'total_price'=>20000,
             ],
             [
                 
                 "user_id"=>2,
                 "product_id"=>3,
                 'order_number'=>1,
                 'total_price'=>1500,
             ],
             [
                 
                 "user_id"=>2,
                 "product_id"=>1,
                 'order_number'=>3,
                 'total_price'=>3000,
             ],
             
                    
                   
                   
        ]);


    }
}
