<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
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
}
