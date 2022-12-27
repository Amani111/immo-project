<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Govliste;
use App\Product;

class Showroom extends Model
{
    protected $fillble=['name', 'user_id','address','telephone','video','image','description','lat','lng','code_postal' ];

    public function govlist()
    {
        return $this->belongsTo(Govliste::class, 'govliste_id');
    }

   
}
