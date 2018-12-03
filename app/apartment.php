<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apartment extends Model
{
    protected $fillable = [
        'name',
         'description', 
         'estate',
         'company_id',
         'user_id',
         'category',
         'price',
         'cover_image',
    ];
    public function company(){
        return $this->belongsTo('App\company');
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
