<?php

use App\Http\Controllers\FormController;
use App\Models\Category;
use App\Models\Order;
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
// Route::get('/', function () {
    
//     // return  Category::find(2)->products;
//     // return  Category::find(2)->products()->order();
//     // return  Category::find(2)->order; 
//     return Order::find(6)->product->category->categoryFather  ; 
   

// });
Route::get('/', [FormController::class,'form']);
Route::post('/', [FormController::class,'store']);


