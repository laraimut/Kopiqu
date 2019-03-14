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
$prodcuct1  = new produks;
$prodcuct1->nama = \request('nama');
$prodcuct1->harga=\request('harga');
$prodcuct1->parent_id=\request('idp');
$prodcuct1->keterangan="-";
$image = \request('tambahfoto');
$prodcuct1->image = time() . "." . $image->extension();
$dest = storage_path('/app/public/');
$image->move($dest,$prodcuct1->image);

  if($prodcuct1->save()){
      return redirect()->route('admin.item');

  }
}
public function change(){
$coba =transaksi::find(\request('idss'));
$coba->status=\request('statusPembayaran');
if($coba->save()){
        return redirect()->route('admin.user');
}






}

public function updateFoto(){
  $user = user::Find(Auth::id());
  $status = Request::hasFile('tambahfoto');
  $image = request('tambahfoto');
  $dest = storage_path('/app/public');
  File::delete($dest . "/" . $user->image . "");
  $user -> image = time().".".$image->extension();
  $image->move($dest,$user->image);
  $user->save();
  return 1;
}

}
