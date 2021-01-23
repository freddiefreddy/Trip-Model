<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    protected $fillable = [ 
        'trips'
    ];


    protected $casts = [
        'trips' => 'array'
    ];

}
