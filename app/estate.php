<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estate extends Model
{
     protected $fillable = [
        'name',
         'location', 
         'company_id',
    ];
    public function company(){
        return $this->belongsToMany('App\company');
    }
    public function apartments(){
        return $this->hasMany('App\apartment');
        
    }
    public function houses(){
        return $this->hasMany('App\house');
    }
}
