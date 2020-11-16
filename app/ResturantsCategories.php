<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ResturantsCategories extends Model
{
    public $fillable = [
        'name','name_ar','status'
    ];

    public function Resturants()
    {
        return $this->belongsToMany('App\Vendor', 'vendors',
            'vendor_id', 'resturants_categories_id');
    }


    public function getNameAttribute($value){
        if(Session::get('locale') == 'ar' ){
            return $this->name_ar;
        }else{
            return $value;
        }
    }



}
