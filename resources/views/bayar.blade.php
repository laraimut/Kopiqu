

@extends('layouts/app')
@section('content')
        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Transfer To :</h2>
                                  <h2>BCA VIRTUAL ACCOUNT </h2>
                                  <h2>123123123000{{$idlogin}} </h2>
                                    <h2>Total Harga = {{$subTotalq - $random}} </h2>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/active.js"></script>

    @endsection
