@extends('layouts.navadmin')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                  <div class="w3-container">
                    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Ganti Status</button>
                    <div id="id01" class="w3-modal">
                      <div class="w3-modal-content">
                        <div class="w3-container">
                          <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body mx-3">
                      <form method="post" action="{{route('ganti.status')}}">
                          @csrf

                        <div class="md-form mb-5">
                            <input type="int" id="name" name="id" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="orangeForm-name">Id Transaksi</label>
                          </div>
                          <div class="md-form mb-5">
                              <input type="int" id="name" name="total" class="form-control validate">
                              <label data-error="wrong" data-success="right" for="orangeForm-name">Total</label>
                            </div>
                            <div class="md-form mb-5">
                                <input type="int" id="name" name="nama" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nama</label>
                              </div>
                              <div class="md-form mb-5">
                                  <input type="int" id="name" name="iduser" class="form-control validate">
                                  <label data-error="wrong" data-success="right" for="orangeForm-name">Id User</label>
                                </div>
                                <div class="md-form mb-5">
                                    <input type="int" id="name" name="status" class="form-control validate">
                                    <label data-error="wrong" data-success="right" for="orangeForm-name">Status</label>
                                  </div>





                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                          <input  type="submit"class="btn btn-deep-orange">
                        </div>

                        </form>
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
                                            <th> Status Bayar</th>

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
