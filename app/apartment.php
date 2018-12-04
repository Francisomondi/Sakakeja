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
         'category',
         'price',
         'cover_image',
    ];
    public function users(){
        return $this->belongsTo('App\user');
    }
    public function estate(){
        return $this->belongsTo('App\estate');
    }
    public function houses(){
        return $this->hasMany('App\house');

    }
    public function categories(){
        return $this->hasOne('App\category');
    }
}
