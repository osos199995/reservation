<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotResturantsCategories extends Model
{
    public $fillable = [
        'resturant_id','resturant_categories_id'
    ];
}
