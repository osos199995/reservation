<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{

    protected $fillable = [
'name_en',
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
'branch_type_id',
    ];



}
