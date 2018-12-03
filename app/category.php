<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name',
         'description',
          

    ];

    public function apartments(){
        return $this->belongsToMany('App\apartment');
    }
    public function house(){
        return $this->belongsToMany('App\house');
    }
}
