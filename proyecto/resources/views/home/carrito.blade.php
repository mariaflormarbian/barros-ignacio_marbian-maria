
@extends('layouts.main')

@section('title', 'Carrito Producto')

@section('carrito', 'active')

@section('main')

<section id="featured" class="my-5 py-5"> 

    <div class="container mt-5 py-5">

        <h2 class="font-weight-bold">Carrito</h2>
        <hr>

    </div>

    <div id="cart-container" class="container my-5">

        <table>

            <thead>

                <tr>

                    <td>Remove</td>
                    <td>Image</td>
                    <td>Product</td>
                    <td>Price</td>
                    <td>Quantity</td>
                    <td>Total</td>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td><a href="#"><i class="las la-trash-alt"></i></a></td>
                    <td><img src="../img/shoes/1.jpg" alt=""></td>
                    <td><h5>Handbag Fringilla</h5></td>
                    <td><h5>$65</h5></td>
                    <td><input type="number" class="w-25 pl-1" value="1"></td>
                    <td><h5>$130.000</h5></td>

                </tr>

                <tr>

                    <td><a href="#"><i class="las la-trash-alt"></i></a></td>
                    <td><img src="../img/shoes/1.jpg" alt=""></td>
                    <td><h5>Handbag Fringilla</h5></td>
                    <td><h5>$65</h5></td>
                    <td><input type="number" class="w-25 pl-1" value="1"></td>
                    <td><h5>$130.000</h5></td>

                </tr>

                <tr>

                    <td><a href="#"><i class="las la-trash-alt"></i></a></td>
                    <td><img src="../img/shoes/1.jpg" alt=""></td>
                    <td><h5>Handbag Fringilla</h5></td>
                    <td><h5>$65</h5></td>
                    <td><input type="number" class="w-25 pl-1" value="1"></td>
                    <td><h5>$130.000</h5></td>

                </tr>

            </tbody>

        </table>

    </div>

</section>

<section id="cart-bottom" class="container">

    <div class="row">

        <div class="coupon col-lg-6 col-md-6 col-12 mb-4">

            <div>

                <h5>COUPON</h5>
                <p>Enter you coupon code if you have one.</p>
                <input type="text" placeholder="Coupon Code">
                <button>APPLY COUPON</button>

            </div>

        </div>

        <div class="total col-lg-6 col-md-6 col-12">

            <div>

                <h5>CART TOTAL</h5>
                <div class="d-flex justify-content-between">

                    <h6>Subtotal</h6>
                    <p>$215.00</p>

                </div>

                <div class="d-flex justify-content-between">

                    <h6>Shipping</h6>
                    <p>$215.00</p>

                </div>

                <hr class="second-hr">

                <div class="d-flex justify-content-between">

                    <h6>Total</h6>
                    <p>$215.00</p>

                </div>

                <button class="ml-auto">PROCEED TO CHECKOUT</button>

            </div>

        </div>

    </div>

</section>

@endsection
