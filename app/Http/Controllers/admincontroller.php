<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produks;
use App\User;
use App\transaksi;
class admincontroller extends Controller
{
    //

    //
  public function index(){
    $temps = produks::all();
    $orang = User::all();
    $trans = transaksi::all();
    return view ('admin2.admin',compact('temps','orang','trans'));
  }



  public function user(){
    $trans = transaksi::all();
    return view ('admin2.user',compact('trans'));
    }


  public function item(){
    $temps = produks::all();
    $orang = User::all();

  return view ('admin2.item',compact('temps','orang'));

  }


public function store(){

$product = new produks;
$product->nama=\request('nama');
$product->harga=\request('harga');


  if($product->save()){
      return redirect()->route('admin.item');

  }
}

public function store1(){

$product1 = new produks;
$product1->nama=\request('nama');
$product1->harga=\request('harga');
$product1->parent_id=\request('idp');

  if($product1->save()){
      return redirect()->route('admin.item');

  }
}

}
