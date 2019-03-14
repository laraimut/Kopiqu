<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/','UIcontroller@welcome')->name('awal');
Route::get('/cart','UIcontroller@cart')->name('cart');
Route::get('/checkout','UIcontroller@cek')->name('checkout');
Route::get('/product','UIcontroller@produk')->name('produk');
Route::get('/admin' , 'AdminController@index')->name('admin.panel');
Route::get('/item','AdminController@item')->name('admin.item');
Route::post('/additem','AdminController@store')->name('item.add');
Route::post('/addproduk','AdminController@store1')->name('item.produk');
Route::get('/user','AdminController@user')->name('admin.user');
Route::post('/addcart','cartcontroller@store')->name('add.cart');
Route::get('/bayar','UIcontroller@bayar')->name('bayar');
Route::post('/changestatus','AdminController@change')->name('ganti.status');
Route::post('/updateFoto','AdminController@updateFoto')->name('updateFoto');
Route::post('/addTransaksi','UIcontroller@addTransaksi2')->name('addTransaksi');
