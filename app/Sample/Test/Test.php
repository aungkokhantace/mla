<?php

namespace App\Sample\Test;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'tests';

    protected $fillable = [
        'name',
        'description'

    ];
}
