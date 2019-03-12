<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
    //

    public function child(){
return $this->hasMany('App\produks','id');

    }
}
