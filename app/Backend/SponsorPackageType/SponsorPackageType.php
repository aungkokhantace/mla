<?php
/**
 * Created by PhpStorm.
 * Author: Aung Ko Khant
 * Date: 2017-09-25
 * Time: 10:36 AM
 */
namespace App\Backend\SponsorPackageType;

use Illuminate\Database\Eloquent\Model;

class SponsorPackageType extends Model
{
    protected $table = 'sponsor_package_type';

    protected $fillable = [
        'id',
        'name',
        'currency',
        'amount',
        'created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'
        ,
    ];
}
