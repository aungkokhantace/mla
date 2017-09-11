<?php

namespace App\Backend\Test;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'test';

    protected $fillable = [
        'id',
        'content',
        'created_by','updated_by','deleted_by','created_at','updated_at','deleted_at'
    ];
}
