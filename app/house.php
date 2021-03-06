<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    protected $fillable = [
        'title',
        'user_id', 
        'description',
        'apartment_id',
        'photo',
        'price',
        'category',
        
    ];
    public function apartments(){
        return $this->belongsTo('App\apartment');
    }

    public function users(){
        return $this->belongsTo('App\User');
    }
    public function rooms(){
        return $this->hasMany('App\room');
    }

}
