<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use League\Flysystem\Config;

class Vendor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'vendor';

    protected $fillable = [
        'name','name_ar', 'email', 'password','phone','logo','status','resturanttype_id'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function Categories()
    {
return $this->belongsToMany('App\ResturantsCategories', 'resturants_categories_vendor',
'vendor_id', 'resturants_categories_id');
}

    public function Options()
    {
        return $this->belongsToMany('App\ResturantsTypes', 'resturants_types_vendor',
            'vendor_id', 'resturanturan_options_id');
    }

    public function Type(){
        return $this->hasOne('App\ResturantsTypes','id','resturanttype_id');
    }


    public function getNameAttribute($value){
        if( Session::get('locale') == 'ar' ){

            return $this->name_ar;
        }else{

            return $value;
        }
    }
}
