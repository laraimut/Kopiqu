
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
<button class="btn" onclick="filterSelection('{{$temp2->id}}'')" data-filter=".{{$temp2->id}}">  {{$temp2->nama}}</button>

@endforeach
 <button class="btn active" onclick="filterSelection('all')"> Show all</button>

<div>
  <p>
  </p>
</div>
                    <div class="row">
                      @foreach($test as $est)

                      @foreach($est->child as $temp)



@csrf
                      <div class="col-lg-4 col-md-6 mb-4">
                        <div class="filterDiv {{$temp->parent_id}}">
                        <div class="card h-70">
                          <a href="#"><img class="card-img-top" src="{{ asset('storage/' . $temp->image )   }}" alt=""></a>
                          <div class="card-body">
                            <h4 class="card-title">

                            </h4>
                            <h5>{{$temp->nama}}</h5>
                            <h5>{{$temp->harga}}</h5>
                            <p class="card-text">{{$temp->deskripsi}}</p>
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
</div>

                      @endforeach


                      @endforeach






                    </div>
        </div>
    </div>



<script>
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
  }
}
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}
filterSelection("all")
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("filterDiv");
  if (c == "all") c = "";
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}
</script>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>

@endsection
