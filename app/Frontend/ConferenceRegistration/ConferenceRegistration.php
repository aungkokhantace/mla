<?php

namespace App\Frontend\ConferenceRegistration;

use Illuminate\Database\Eloquent\Model;

class ConferenceRegistration extends Model
{
    protected $table ='conference_registrations';

    protected $fillable =[
      'first_name','middle_name','last_name','organization','email','country','ph_no','registration_category','payment_type','updated_at','created_at','deleted_at'
    ];

    public function Country(){
        return $this->belongsTo('App\Backend\Country\Country','country','id');
    }
}
