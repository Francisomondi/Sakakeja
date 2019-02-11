<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    protected $fillable = [
        'name', 
        'decription',
        'price',
        'dimentions',
        'condition',
        'category',
        'image',
        'user_id',
    ];
    public function users(){
        return $this->belongsTo('App\User');
    }
}
