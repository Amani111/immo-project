<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Showroom;
use App\Category;
use App\Promotion;

class Product extends Model
{
    protected $fillable = ['name','description','image','prix','user_id'];

    public function showrooms()
    {
       return $this->belongsTo(Showroom::class,'showroom_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    
    public function promotion()
    {
        return $this->belongsTo(Promotion::class);
    }
}
