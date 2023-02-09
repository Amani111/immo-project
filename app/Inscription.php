<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $table = "inscriptions";    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nb_photo',
        'rest_photo',
        'status'
    ];
    
    /**
     * user
     *
     * @return void
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
    /**
     * pack
     *
     * @return void
     */
    public function pack()
    {
        return $this->belongsTo(Pack::class, 'pack_id');
    }
}
