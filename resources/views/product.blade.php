
@extends('layouts/app')
@section('content')

        <div class="col-lg-9">
          <div>
            <p>
            </p>
          </div>
<div class = "gambar" >
                <img class="d-block img-fluid" src="img/category.png"  alt="First slide">

    </div>

  

          <h1 class="text-monospace">
          Category
          </h1>

@foreach ($test as $temp2)

<button type="button" class="btn btn-outline-secondary">  {{$temp2->nama}}</button>

@endforeach


<div>
  <p>
  </p>
</div>
                    <div class="row">
                      @foreach($test as $est)

                      @foreach($est->child as $temp)




                      <div class="col-lg-4 col-md-6 mb-4">
                        <div class="card h-70">
                          <a href="#"><img class="card-img-top" src="img/1.jpg" alt=""></a>
                          <div class="card-body">
                            <h4 class="card-title">
                              <a href="#">Coffee</a>
                            </h4>
                            <h5>{{$temp->nama}}</h5>
                            <h5>{{$temp->harga}}</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
                          </div>
                          <div class="card-footer">
                            <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                            <form method="post" action="{{route('add.cart')}}">
                              @csrf
                                <input type="hidden" name="id"value={{$temp->id}}>
                              <input type="hidden" name="nama" value="{{$temp->nama}}">
                              <input type="hidden" name="harga"value={{$temp->harga}}>
                              <input type="submit" class="btn btn-warning">
                            </form>              </div>
                        </div>
                      </div>


                      @endforeach


                      @endforeach






                    </div>
        </div>
    </div>





    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>

@endsection
