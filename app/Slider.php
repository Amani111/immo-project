<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'slide1',
        'slide2',
        'slide3',
    ];
}
