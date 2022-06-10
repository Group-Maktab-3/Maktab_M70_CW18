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
        DB::table('users')->insert([
            [
                'first_name'=>"Ali",
                'last_name'=> "Mohammadi",
                'email'=>"dFG@GMail.com",
                'city'=>"Isfahan"
            ],
            [
                'first_name'=>"Reza",
                'last_name'=> "Ahmadi",
                'email'=>"dFGdsfdDFsf@GMail.com",
                'city'=>"Hamedan"
            ],

           
]);
}
}
