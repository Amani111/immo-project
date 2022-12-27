<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    protected $fillable = [
        'url', 'product_id'
       ];
     public function product()
     {
       return $this->belongsTo('App\Product', 'product_id');
     }
}
