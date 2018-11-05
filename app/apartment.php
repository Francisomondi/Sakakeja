<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apartment extends Model
{
    protected $fillable = [
        'name',
         'description', 
         'location',
         'company_id',
         'estate_id',
    ];
    public function company(){
        return $this->belongsTo('App\company');
    }
    public function estate(){
        return $this->belongsTo('App\estate');
    }
    public function houses(){
        return $this->hasMany('App\houses');

    }
    public function categories(){
        return $this->hasMany('App\category');
    }
}
