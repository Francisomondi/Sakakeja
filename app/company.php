<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    protected $fillable = [
        'name',
         'email',
          'phone',
          'description',
          'user_id',

    ];
    public function user(){
        return $this->belongsTo('App\user');
    }
    public function apartments(){
        return $this->hasMany('App\apartment');
    }
    public function houses(){
        return $this->hasMany('App\house');
    }
    public function estates(){
        return $this->hasMany('App\estate');
    }
}
