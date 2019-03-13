<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cartcontroller extends Controller
{
    //

    function store(){
\Cart::add(\request('id'), \request('nama'), \request('harga'), 1, array());

      return redirect()->route('cart');
    }
}
