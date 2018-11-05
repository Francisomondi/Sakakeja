<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name',
         'description',
          'house_id',
          'apartment_id',
          'estate_id',

    ];

    public function apartments(){
        return $this->belongsToMany('App\apartment');
    }
    public function house(){
        return $this->belongsTo('App\house');
    }
}
