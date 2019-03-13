@extends('layouts.navadmin')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">



                      <div class="row">
                        <div class="col-lg-9">
                            <h2 class="title-1 m-b-25">Tabel Transaksi</h2>
                            <div class="table-responsive table--no-card m-b-40">
                                <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                        <tr>

                                            <th>Nama Barang</th>
                                            <th>Id User</th>
                                            <th>Waktu</th>
                                            <th>Total Harga</th>
                                            <th> Status Bayar</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($trans as $temp4)
                                      <tr>

                                          <td>{{$temp4->nama}}</td>
                                            <td>{{$temp4->iduser}}</td>
                                            <td>{{$temp4->created_at}}</td>
                                            <td>{{$temp4->total}}</td>
  <td>{{$temp4->status}}</td>
    <td><button>EDIT</button></td>

                                      </tr>
                                      @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                      </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection
