<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UIcontroller extends Controller
{
    public function welcome(){
         return view('welcome');


    }

    public function cart(){

return view('cart');

    }

    public function cek(){

return view('checkout');

    }

    public function produk(){

return view ('product');

    }
}
