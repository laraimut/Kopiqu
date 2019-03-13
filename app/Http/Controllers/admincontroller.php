<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\produks;
use App\User;
use App\transaksi;
use Auth;
class admincontroller extends Controller
{
    //

    //
  public function index(){
      $idlogin = Auth::id();
    $temps = produks::all();
    $orang = User::all();
    $trans = transaksi::all();
    return view ('admin2.admin',compact('temps','orang','trans','idlogin'));
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
$product->keterangan=\request('ket');
$product->image='test';

  if($product->save()){
      return redirect()->route('admin.item');

  }
}

public function store1(){

$product1->harga=\request('harga');
$product1->parent_id=\request('idp');
$product1->keterangan="-";
$product1->image='test';

  if($product1->save()){
      return redirect()->route('admin.item');

  }
}
public function change(){
$coba->id=\request('id');
$coba->status=\request('status');



         $update = \App\transaksi::where('id', $coba)->update(status);




      return redirect()->route('admin.user');


}
}
