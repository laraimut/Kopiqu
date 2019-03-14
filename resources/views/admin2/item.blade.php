@extends('layouts.navadmin')

@section('content')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">


                      <div class="w3-container">
                        <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Tambah Produk</button>
  <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">Tambah Kategori</button>
                        <div id="id01" class="w3-modal">
                          <div class="w3-modal-content">
                            <div class="w3-container">
                              <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body mx-3">
                          <form method="post" action="{{route('item.produk')}}" enctype="multipart/form-data">
                              @csrf

                            <div class="md-form mb-5">
                                <input type="text" id="name" name="nama" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-name">Nama</label>
                              </div>
                              <div class="md-form mb-5">
                                <input type="int" id="orangeForm-email" name="harga" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-email">Harga</label>
                              </div>
                              <div class="md-form mb-5">
                                <input type="int" id="orangeForm-email" name="idp" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-email">Id Kategori</label>
                              </div>
                              <div class="md-form mb-5">
                                <input type="text" name="ket" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="orangeForm-email">Keterangan</label>
                              </div>    <div class="md-form mb-5">
                              <p class="text-primary">Tambah foto</p>

                                    <input placeholder="Tambah Foto" type="file" name="tambahfoto" accept="image/*">
                                    <input type="submit" class="btn btn-primary-outline"  value="submit">

</div>


                            </div>
                            <div class="modal-footer d-flex justify-content-center">
                              <input  type="submit"class="btn btn-deep-orange">
                            </div>

                            </form>
                          </div>
                        </div>
</div>
                      <div>


                        <p>
                        </p>
                      </div>



  <div id="id02" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
    <form method="post" action="{{route('item.add')}}">
        @csrf

      <div class="md-form mb-5">
          <input type="text" id="name" name="nama" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Nama</label>
        </div>
        <div class="md-form mb-5">
          <input type="int" id="orangeForm-email" name="harga" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Harga</label>
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
                                <h2 class="title-1 m-b-25">Nama Produk</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>No Id</th>
                                                <th>Nama</th>
                                                <th>Kategori</th>
                                                <th>Deskripsi</th>


                                                <th class="text-right">price</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($temps as $temp2)
                                          <tr>
                                              <td>{{$temp2->id}}</td>
                                              <td>{{$temp2->nama}}</td>
                                                <td>{{$temp2->parent_id}}</td>
                                                  <td>{{$temp2->keterangan}}</td>
                                              <td>{{$temp2->harga}}</td>


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
