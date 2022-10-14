@extends('layouts.main')

@section('title', 'Pagina Principal')
    
@section('main')

    <section id="home">

        <div class="container">

            <h5>NEW ARRAIVALS</h5>
            <h1><span>Diseños a medida,</span> cómodos y suaves</h1>
            <p>Aprovecha nuestros descuentos en efectivo</p>
            <button>Comprá ahora</button>

        </div>

    </section>

    <section id="featured" class="my-5 pb-5"> 

        <div class="container text-center mt-5 py-5">

            <h3>Destacados</h3>
            <hr class="mx-auto">
            <p>Aquí puede ver nuestros nuevos productos más vendidos</p>

        </div>

        <div class="row mx-auto container-fluid">

            <div class="product text-center col-lg-3 col-md-4 col-12">

                <img class="img-fluid mb-3" src="{{ url('imgs/proyecto/pollera_producto1.jpg') }}" alt="">

                <div class="star">

                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>

                </div>

                <h5 class="p-name">Pollera Rayna</h5>
                <h4 class="p-price">$10.499</h4>
                <button class="buy-btn">Comprá</button>

            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">

                <img class="img-fluid mb-3" src="{{ url('imgs/proyecto/chupin_producto1.jpg') }}" alt="">

                <div class="star">

                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>

                </div>

                <h5 class="p-name">Chupín Sassy</h5>
                <h4 class="p-price">$13.000</h4>
                <button class="buy-btn">Comprá</button>

            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">

                <img class="img-fluid mb-3" src="{{ url('imgs/proyecto/mom_producto1.jpg') }}" alt="">

                <div class="star">

                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>

                </div>

                <h5 class="p-name">Mom</h5>
                <h4 class="p-price">$12.200</h4>
                <button class="buy-btn">Comprá</button>

            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">

                <img class="img-fluid mb-3" src="{{ url('imgs/proyecto/pollera_producto2.jpg') }}" alt="">

                <div class="star">

                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>

                </div>

                <h5 class="p-name">Pollera Flower</h5>
                <h4 class="p-price">$7.200</h4>
                <button class="buy-btn">Comprá</button>

            </div>

        </div>

    </section>

    <section id="banner" class="my-5 py-5">

        <div class="container">

            <h3>Aprovechá<br> Descuentos hasta 20% OFF</h3>
            <button class="text-uppercase">Comprá</button>

        </div>

    </section>

    <section id="new" class="w-100">

        <div class="row p-0 m-0">

            <div class="one col-lg-4 col-md-12 col-12 p-0">

                <img class="img-fluid" src="{{ url('imgs/proyecto/categoria_chupines.jpg') }}" alt="">

                <div class="details">

                    <button class="text-uppercase">Ver</button>

                </div>

            </div>

            <div class="one col-lg-4 col-md-12 col-12 p-0">

                <img class="img-fluid" src="{{ 'imgs/proyecto/categoria_oxford.jpg' }}" alt="">

                <div class="details">

                    <button class="text-uppercase">Ver</button>

                </div>

            </div>

            <div class="one col-lg-4 col-md-12 col-12 p-0">

                <img class="img-fluid" src="{{ url('imgs/proyecto/categoria_mom.jpg') }}" alt="">

                <div class="details">

                    <button class="text-uppercase">Ver</button>

                </div>

            </div>

        </div>

    </section> 

    <section id="clothes" class="my-5"> 

        <div class="container text-center mt-5 py-5">

            <h3>Jeans & Polleras</h3>
            <hr class="mx-auto">
            <p>Aquí puede ver nuestros nuevos productos a un precio justo en ieta.</p>

        </div>

        <div class="row mx-auto container-fluid">

            <div class="product text-center col-lg-3 col-md-4 col-12">

                <img class="img-fluid mb-3" src="{{ url('imgs/proyecto/pollera_producto4.jpg') }}" alt="">

                <div class="star">

                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>

                </div>

                <h5 class="p-name">Pollera Owen</h5>
                <h4 class="p-price">$12.000</h4>
                <button class="buy-btn">Comprá</button>

            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">

                <img class="img-fluid mb-3" src="{{ url('imgs/proyecto/chupin_producto3.jpg') }}" alt="">

                <div class="star">

                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>

                </div>

                <h5 class="p-name">Chupín Alice</h5>
                <h4 class="p-price">$15.000</h4>
                <button class="buy-btn">Comprá</button>

            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">

                <img class="img-fluid mb-3" src="{{ url('imgs/proyecto/pollera_producto5.jpg') }}" alt="">

                <div class="star">

                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>

                </div>

                <h5 class="p-name">Pollera Jayden</h5>
                <h4 class="p-price">$8.000</h4>
                <button class="buy-btn">Comprá</button>

            </div>

            <div class="product text-center col-lg-3 col-md-4 col-12">

                <img class="img-fluid mb-3" src="{{ url('imgs/proyecto/oxford_producto2.jpg') }}" alt="">

                <div class="star">

                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>
                    <i class="las la-star"></i>

                </div>

                <h5 class="p-name">Oxford Dharma</h5>
                <h4 class="p-price">$11.000</h4>
                <button class="buy-btn">Comprá</button>

            </div>

        </div>

    </section>

    <section id = "newsletter" class = "py-3">

        <div class = "container">

            <div class = "d-flex flex-column align-items-center justify-content-center">

                <div class = "title text-center pt-3 pb-5">
                    <h2 class = "position-relative d-inline-block ms-4">Subscripción al Newsletter</h2>
                    <hr class="mx-auto">
                </div>

                <p class = "text-center text-muted">Podes recibir todas las noticias de último momento</p>
                
                <div class = "input-group mb-5 mt-3">
                    <input type = "text" class = "form-control" placeholder="Tu Email ...">
                    <button class = "btn" type = "submit">Subscribir</button>
                </div>

            </div>

        </div>
        
    </section>

@endsection
    