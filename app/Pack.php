<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pack extends Model
{
    
    protected $fillable = [
        'title',
        'user_id',
        'image', 
        'description',
    ];
}
