<?php

namespace App\Models;

use App\Casts\FirstCapitalCast;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $appends = ['full_name',];

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'city'
    ];
    
    protected $hidden = [

        'timestamps',
    ];
    protected $casts =  [
        'first_name'=>FirstCapitalCast::class,
        'last_name'=>FirstCapitalCast::class,
        'city'=>FirstCapitalCast::class
    ];

     protected function email(): Attribute
    {
        return Attribute::make(
            // get: fn ($value) => ucfirst($value),
            set: fn ($value) => strtolower($value),
        );
    }
    //  protected function city(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value) => ucfirst($value),
    //         set: fn ($value) => strtolower($value),
    //     );
    // }
    protected function getFullNameAttribute(){
        return "{$this->first_name} {$this->last_name}";
    }
}
