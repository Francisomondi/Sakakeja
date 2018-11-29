<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class house extends Model
{
    protected $fillable = [
        'company_id', 
        'estate_id', 
        'apartment_id',
    ];
    public function apartments(){
        return $this->belongsTo('App\apartment');
    }
    public function estate(){
        return $this->belongsTo('App\estate');
    }
    public function company(){
        return $this->belongsTo('App\company');
    }
    public function categories(){
        return $this->hasMany('App\category');
    }
}
