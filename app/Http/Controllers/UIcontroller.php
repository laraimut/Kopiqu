<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produks;
use Auth;
class UIcontroller extends Controller
{
    public function welcome(){
         return view('welcome');


    }

    public function cart(){
$cartCollection = \Cart::getContent();
$subTotal = \Cart::getSubTotal();
$cartTotalQuantity = \Cart::getTotalQuantity();
return view('cart',compact('cartCollection','subTotal','cartTotalQuantity'));

    }

    public function cek(){
      $cartCollection = \Cart::getContent();
      $subTotall = \Cart::getSubTotal();
      $cartTotalQuantity = \Cart::getTotalQuantity();
      return view('checkout',compact('cartCollection','subTotall','cartTotalQuantity'));


    }

    public function produk(){
      $test = produks::whereNull('parent_id')->with('child')->get();


return view ('product',compact("test"));

    }

    public function bayar(){
      $idlogin = Auth::id();
        $subTotalq = \Cart::getSubTotal();
        $random = rand(100,500);
return view ('bayar',compact('idlogin','subTotalq','random'));


    }


}
