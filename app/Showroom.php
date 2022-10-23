<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Govliste;
use App\Product;

class Showroom extends Model
{
    protected $fillble=['name', 'user_id','address','telephone','vedio','description','lat','lng','govliste_id','code_postal' ];

    public function govlist()
    {
        return $this->belongsTo(Govliste::class, 'govliste_id');
    }

    public function products()
    {
       return $this->belongsToMany(Product::class);
    }
}
