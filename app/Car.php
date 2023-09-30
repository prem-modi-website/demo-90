<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public $table = "cars";
    
    // public function mechanic()
    // {
    //     return $this->belongsTo('App\Mechanic','mechanic_id','id');
    // }

    
    // public function mechanic()
    // {
    //     // return ('App\Car');
    // }
}
