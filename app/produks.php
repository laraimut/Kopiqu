<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produks extends Model
{
    //

    public function child(){
return $this->hasMany('App\produks','parent_id');

    }
    public function parent(){
return $this->belongsTo('App\produks','parent_id');


    }
}
