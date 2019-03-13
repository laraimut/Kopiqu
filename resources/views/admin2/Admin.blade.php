@extends('layouts.navadmin')

@section('content')

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>

                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">

                                              <!-- Jumlah member boi -->
                                                <h2>{{count($orang)}}</h2>
                                                <span>Jumlah User</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                              <!-- JASA YANG TERPAKAI  -->
                                                <h2>{{count($temps)}}</h2>
                                                <span>Jumlah Product</span>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Nama Produk</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No Id</th>
                                                <th>Nama</th>
                                                <th>Kategori</th>

                                                <th class="text-right">price</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($temps as $temp2)
                                          <tr>
                                              <td>{{$temp2->id}}</td>
                                              <td>{{$temp2->nama}}</td>
                                                <td>{{$temp2->parent_id}}</td>
                                              <td>{{$temp2->harga}}</td>


                                          </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                          <div class="col-lg-9">
                              <h2 class="title-1 m-b-25">Tabel User</h2>
                              <div class="table-responsive table--no-card m-b-40">
                                  <table class="table table-borderless table-striped table-earning">
                                      <thead>
                                          <tr>
                                              <th>No Id</th>
                                              <th>Nama</th>
                                              <th>Tipe</th>

                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($orang as $temp3)
                                        <tr>
                                            <td>{{$temp3->id}}</td>
                                            <td>{{$temp3->name}}</td>
                                              <td>{{$temp3->tipe}}</td>


                                        </tr>
                                        @endforeach
                                      </tbody>
                                  </table>
                              </div>
                          </div>

                      </div>
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

                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($trans as $temp4)
                                      <tr>

                                          <td>{{$temp4->nama}}</td>
                                            <td>{{$temp4->iduser}}</td>
                                            <td>{{$temp4->created_at}}</td>
                                            <td>{{$temp4->total}}</td>


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
