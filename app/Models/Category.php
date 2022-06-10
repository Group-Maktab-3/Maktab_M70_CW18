<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $hidden=['created_at','updated_at'];
    public function scopeNoCategory($query){
        return $query->where('category_id',null);
    }
    public function scopeShow($query){
        return $query->where('status','show');
    }
    public function products()
    {
       return $this->hasMany(Product::class);
    }
     public function order()
    {
        return $this->hasManyThrough(Order::class, Product::class);
    }
    public function categoryFather()
    {
       return $this->belongsTo(Category::class,'category_id','id');
    }

    protected function categoryId (): Attribute
    {
        return Attribute::make(
            get: fn ($value) =>($value)??"ندارد" ,
            // set: fn ($value) => strtolower($value),
        );
    }


}

