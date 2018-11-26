<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function company(){
        return $this->hasOne('App\company');
    }
    public function estate(){
        return $this->hasMany('App\estate');
    }
    public function comments(){
        return $this->hasMany('App\comment');
    }
    public function role(){
        return $this->belongsTo('App\role');
    }
    public function apartments(){
        return $this->hasMany('App\apartment');
    }
}
