<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
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
}

