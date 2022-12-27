<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    protected $fillable = [
        'titre',
        'offre',
        'description',
        'active'
    ];

}
