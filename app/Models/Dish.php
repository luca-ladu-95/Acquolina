<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
    use HasFactory;

    protected $guarded = [];


    //The price is store in centinaia
    public function getPriceAttribute($value) {
        return $value / 100;
    }

    public function setPriceAttribute($value) {
        $this->attributes['price'] = $value * 100;
    }


}
