<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $fillable = [
        'title',
        'description',
        'apartment_id',
        'user_id',
        'image',
        'house_id',
        
    ];
    public function apartments(){
        return $this->belongsTo('App\apartment');
    }
   
   
    public function house(){
        return $this->belongsTo('App\house');
    }
    public function users(){
        return $this->belongsTo('App\User');
    }
}

