<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Session;

class Branch extends Authenticatable
{
    use Notifiable;
    protected $hidden = [
        'password', 'remember_token',
    ];
    protected $guard = 'branch';


    protected $fillable = ['name_en',
'name_ar',
'status',
'password',
'vendor_id',
'city_id',
'area_id',
'piece_en',
'piece_ar',
'longitude',
'lattiude',
'phone',
'email',
'branch_type_id',
    ];


    public function Categories()
    {
        return $this->belongsToMany('App\ResturantsCategories', 'resturants_categories_branch',
            'branch_id', 'resturants_categories_id');
    }

    public function Options()
    {
        return $this->belongsToMany('App\ResturantsTypes', 'resturants_options_branch',
            'branch_id', 'resturants_options_id');
    }

    public function Type(){
        return $this->hasOne('App\ResturantsTypes','id','branch_type_id');
    }

    public function getNameAttribute($value){
        if( Session::get('locale') == 'ar' ){

            return $this->name_ar;
        }else{

            return $this->name_en;
        }
    }

}
