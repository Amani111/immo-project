<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;
use App\Souscategory;


class Category extends Model
{
    
    protected $fillable = ['name', 'slug', 'parent_id'];

    public function subcategory()
    {
        return $this->hasMany(\App\Models\Category::class, 'parent_id');
    }

    

    public function souscategories()
    {
       return $this->hasMany(Souscategory::class);
    }

    public function products()
    {
       return $this->hasMany(Product::class);
    }
}
