<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIcontroller extends Controller
{
    public function welcome(){
         return view('welcome');


    }
}
