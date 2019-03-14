@extends('layouts.navadmin')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                  <div class="w3-container">

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
                          <div class="form-group">
      <label for="sel1">Select list (select one):</label>
      <select class="form-control" name="statusPembayaran" id="sel1">
        <option value="paid">Paid</option>
        <option value="shipped">Shipped</option>
      </select>

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
                                            <th>id </th>
                                            <th>JumlahBarang</th>
                                            <th>Id User</th>
                                            <th>Waktu</th>
                                            <th>Total Harga</th>
                                            <th> Status Bayar</th>
                                            <th> action </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                      @foreach ($trans as $temp4)
                                      <tr>
                                        <td>{{$temp4->id}}</td>
                                        <td>{{$temp4->JumlahBarang}}</td>

                                            <td>{{$temp4->iduser}}</td>
                                            <td>{{$temp4->created_at}}</td>
                                            <td>{{$temp4->total}}</td>
                                            <td>{{$temp4->status}}</td>
                                            <td>  <button data-id="{{$temp4->id}}" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
  Open modal
</button></td>


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





            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Modal Heading</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <form method="post" action="{{route('ganti.status')}}">
                        @csrf
                        <div class="form-group">
    <label for="sel1">Select list (select one):</label>
    <select class="form-control" name="statusPembayaran" id="sel1">
      <option value="paid">Paid</option>
      <option value="shipped">Shipped</option>
    </select>

                      </div>


                      <input type="hidden" id="ids" name="idss">


                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                      <input  type="submit"class="btn btn-deep-orange">
                      </form>
                  </div>

                </div>
              </div>
            </div>
@endsection
