<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    public $table = "mechanics";

    public function cars()
    {
        return $this->hasMany('App\Car');
    }

    public function Owners()
    {
        return $this->hasManyThrough('App\Owner','App\Car','mechanic_id','car_id','id','id');
    }

    public function carss()
    {
        return $this->belongsToMany('App\Car','car__mechanics','mechanic_id','car_id','id','id');
    }
}
