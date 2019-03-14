<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produks;
use App\transaksi;
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
        $idlogin = Auth::id();
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
        $jumlahBarang = \Cart::getTotalQuantity();
return view ('bayar',compact('idlogin','subTotalq','random','jumlahBarang'));


    }
    public function bayar2(){
        $idlogin = Auth::id();
        $subTotalq = \Cart::getSubTotal();
        $random = rand(100,500);
        $jumlahBarang = \Cart::getTotalQuantity();
return view ('checkout',compact('idlogin','subTotalq','random','jumlahBarang'));


    }


public function addTransaksi2(){
  $area= new transaksi;
  $idlogin = Auth::id();
  $area -> total = \Cart::getSubTotal();
  $area -> jumlahBarang =  \Cart::getTotalQuantity();
  $area -> idUser = $idlogin;
  $area -> status = 'belum bayar';
  $area -> alamat = \request('alamat');
  if($area -> save()){
    return redirect()->route('bayar');
  }
  else{
    echo 'fail';
  }
}
}
