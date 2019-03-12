@extends('layouts/app')
@section('content')

        <div class="cart-table-area section-padding-100">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="cart-title mt-50">
                            <h2>Shopping Cart</h2>
                        </div>

                        <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th> Weight </th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/1.jpg" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>Americano</h5>
                                        </td>
                                        <td class="price">
                                            <span>Rp 25.000</span>
                                        </td>
                                        <td class="weight">
                                            <span>2 Kg</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/matcha.jpg" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>Matcha Latte</h5>
                                        </td>
                                        <td class="price">
                                            <span>Rp 45.000</span>
                                        </td>
                                        <td class="weight">
                                            <span>2 Kg</span>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="img/luwak.jpeg" alt="Product"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>Ice Tea</h5>
                                        </td>
                                        <td class="price">
                                            <span>Rp 20.000</span>
                                        </td>
                                        <td class="weight">
                                            <span>2 Kg</span>
                                        </td>

                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>Rp 90.000</span></li>
                                <li><span>delivery:</span> <span>Rp 20.000</span></li>
                                <li><span>total:</span> <span>Rp 90.000</span></li>
                            </ul>
                            <div class="cart-btn mt-100">
                                <a href="cart.html" class="btn amado-btn w-100">Checkout</a>
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
