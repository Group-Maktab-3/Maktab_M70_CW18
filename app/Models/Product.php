<?php

namespace App\Models;

use App\Casts\PriceCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts=[
        'price'=>PriceCast::class,
    ];
    use HasFactory;
    protected $visible=['name','id','price'];

    public function scopeMoreSeen($query){
        return $query->where('seen_number','>',500);
    }
    public function scopePopular($query){
        return $query->where('sold_number','>',25);
    }
    public function scopeLikeSomething($query, $name){
        return $query->where('name','like',"%{$name}%");
    }
    public function category()
    {
       return $this->belongsTo(Category::class);
    }
    public function orders()
    {
       return $this->hasMany(Order::class);
    }
    

}
