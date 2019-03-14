<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
          'name' => 'vinson',
          'email' => 'admin@admin.com',
          'password' => bcrypt('admin'),
          'tipe' => 'admin',

      ]);

      DB::table('users')->insert([
        'name' => 'lara',
        'email' => 'user@gmail.com',
        'password' => bcrypt('user'),
        'tipe' => 'user',

    ]);

    DB::table('produks')->insert([
      'nama' => 'Kopi Frappucino',
      'keterangan' => '',

  ]);

  DB::table('produks')->insert([
    'nama' => 'kopi Frappucino latte',
    'parent_id' => 1,
    'harga' => 15000,
    'image' => 'kfl.jpg',
    'keterangan' => '',

]);

DB::table('produks')->insert([
  'nama' => 'kopi Frappucino Jumbo',
  'parent_id' => 1,
  'harga' => 30000,
  'image' => 'kfj.jpg',
  'keterangan' => '',

]);

DB::table('produks')->insert([
  'nama' => 'Teh Frappucino',
  'keterangan' => '',

]);

DB::table('produks')->insert([
  'nama' => 'Teh Frappucino latte',
  'parent_id' => 4,
  'harga' => 15000,
  'image' => 'tfl.jpg',
  'keterangan' => '',

]);

DB::table('produks')->insert([
'nama' => 'Teh Frappucino Jumbo',
'parent_id' => 4,
'harga' => 30000,
'image' => 'tfj.jpg',
'keterangan' => '',

]);

DB::table('transaksis')->insert([
'total' => 10000,
'jumlahBarang' => 1,
'Iduser' => 1,
'status' => 'belum bayar',
'alamat' => 'jalan surga',
]);
    }
}
