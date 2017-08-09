<?php

namespace App\Backend\City;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';

    protected $fillable = [
        'id',
        'name',
        'country_id',
        'updated_at','created_at','deleted_at','updated_by','created_by','deleted_by'
    ];

    public function country()
    {
        return $this->belongsTo('App\Backend\Country\Country','country_id','id');
    }
}
