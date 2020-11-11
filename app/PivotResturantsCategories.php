<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotResturantsCategories extends Model
{

    public $fillable = [
        'vendor_id','resturant_categories_id'
    ];
}
