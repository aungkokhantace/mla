<?php

namespace App\Backend\Sponsor;

use Illuminate\Database\Eloquent\Model;

class Sponsor extends Model
{
    protected $table = 'sponsors';

    public function PackageType(){
        return $this->belongsTo('App\Core\PackageType\PackageType','package_type','value');
    }
}
