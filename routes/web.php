<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     // return  Category::noCategory()->get();
//     //  return  Category::show()->get();
//     //  return  Product::moreSeen()->get();
//     //  return  Product::popular()->get();
//     //  return  Product::likeSomething('سامسونگ')->get();
  
// });
Route::get('/', function () {
    
    return  Category::find(2)->products;
});


