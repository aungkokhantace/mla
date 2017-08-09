<?php

namespace App\Backend\Township;

use Illuminate\Database\Eloquent\Model;

class Township extends Model
{
    protected $table = 'townships';

    protected $fillable = [
        'id',
        'name',
        'city_id',
        'updated_at','created_at','deleted_at','updated_by','created_by','deleted_by'
        ,
    ];

    public function city()
    {
        return $this->belongsTo('App\Backend\City\City','city_id','id');
    }
}
