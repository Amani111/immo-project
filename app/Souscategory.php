<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Souscategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
