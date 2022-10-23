<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Showroom;

class Govliste extends Model
{
     
    protected $fillable = [
        'name',
    ];


    public function showrooms()
    {
       return $this->hasMany(Showroom::class);
    }
}
