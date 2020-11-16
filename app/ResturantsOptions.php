<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ResturantsOptions extends Model
{
    public $fillable = [
        'name','name_ar','status'
    ];


    public function getNameAttribute($value){
        if(Session::get('locale') == 'ar' ){
            return $this->name_ar;
        }else{
            return $value;
        }
    }
}
