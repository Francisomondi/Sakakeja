<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
     protected $fillable = [
        'name',
         'location', 
        
    ];
   
    public function apartments(){
        return $this->hasMany('App\apartment');
        
    }
    public function houses(){
        return $this->hasMany('App\house');
    }
}
