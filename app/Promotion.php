<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Promotion extends Model
{
    
    protected $fillable=['pourcentage','user_id','date_debut','date_fin','new_prix'];

    public function product()
    {
       return $this->belongsTo(Product::class,'product_id');
    }
}
