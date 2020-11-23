<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;

class Cities extends Model
{
    protected $fillable = [
        'name_en', 'name_ar','status'
    ];



    public function getNameAttribute($value){
        if( Session::get('locale') == 'ar' ){

            return $this->name_ar;
        }else{

            return $this->name_en;
        }
    }
}
