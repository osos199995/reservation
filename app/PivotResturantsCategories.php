<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PivotResturantsCategories extends Model
{

    public $fillable = [
        'vendor_id','resturants_categories_id'
    ];
}
