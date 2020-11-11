<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ResturantsCategories extends Model
{
    public $fillable = [
        'name','status'
    ];

    public function Resturants()
    {
        return $this->belongsToMany('App\Vendor', 'vendors',
            'vendor_id', 'resturants_categories_id');
    }



}
