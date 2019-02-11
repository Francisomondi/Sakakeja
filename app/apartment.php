<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apartment extends Model
{
    protected $fillable = [
        'name',
         'description', 
         'estate', 
         'user_id',
         'phone',
         'cover_image',
    ];
    public function users(){
        return $this->belongsTo('App\User');
    }
    
    public function houses(){
        return $this->hasMany('App\house');

    }
}
