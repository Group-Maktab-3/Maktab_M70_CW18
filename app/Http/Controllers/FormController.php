<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function form()
    {
        $form = [
            ['name' => 'first_name', 'type' => 'text'], 
            ['name' => 'last_name', 'type' => 'text'], 
            ['name' => 'email', 'type' => 'text'],
            ['name' => 'city', 'type' => 'text'],
       
        ];
        return \view('login',compact('form'));     
    }
    public function store(Request $request)
    {   
        // dd($request);
        User::create($request->all());

    }
   
}
