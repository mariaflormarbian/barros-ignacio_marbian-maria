<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') : : Ieta</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <!-- Iconos -->
    <link rel="stylesheet" href="{{ url('css/line-awesome.min.css') }}">
    <!-- Css -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">

        <div class="container">

            <img src="{{ url('imgs/logo1.png') }}" alt="">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i id="bar" class="las la-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Catálogo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <i class="las la-search"></i>
                        <i class="las la-shopping-bag"></i>
                    </li>

                </ul>
                    
            </div>
            
        </div>

    </nav>

    <main>

        @yield('main')

    </main>

    <footer class="mt-5 py-5">

        <div class="row container mx-auto pt-5">

            <div class="footer-one col-lg-3 col-md-6 col-12">

                <img src="{{ url() }}imgs/logo2.png" alt="">

                <p class="pt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Temporibus ea alias odio.</p>

            </div>

            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">

                <h5 class="pb-2">Featured</h5>

                <ul class="text-uppercase list-unstyled">

                    <li><a href="#">men</a></li>
                    <li><a href="#">women</a></li>
                    <li><a href="#">boys</a></li>
                    <li><a href="#">girls</a></li>
                    <li><a href="#">new arrivals</a></li>
                    <li><a href="#">shoes</a></li>
                    <li><a href="#">cloths</a></li>

                </ul>

            </div>

            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">

                <h5 class="pb-2">Contact Uss</h5>

                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>123 STREET NAME, CITY, US</p>
                </div>

                <div>
                    <h6 class="text-uppercase">Phone</h6>
                    <p>(123) 456-789</p>
                </div>

                <div>
                    <h6 class="text-uppercase">Address</h6>
                    <p>123 STREET NAME, CITY, US</p>
                </div>

            </div>

            <div class="footer-one col-lg-3 col-md-6 col-12 mb-3">

                <h5 class="pb-2">Instagram</h5>

                <div class="row">

                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('img/insta/1.jpg') }}" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('img/insta/2.jpg') }}" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('img/insta/3.jpg') }}" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('img/insta/4.jpg') }}" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('img/insta/5.jpg') }}" alt="">

                </div>

            </div>

        </div>

        <div class="copyright mt-5">

            <div class="row container mx-auto">

                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="img/payment.png" alt="">
                </div>
                <div class="col-lg-4 col-md-6 col-12 text-nowrap mb-2">
                    <p>rymo eCommerce &copy; 2021. All Rights Reserved</p>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <a href="#"><i class="lab la-facebook-f"></i></a>
                    <a href="#"><i class="lab la-twitter"></i></a>
                    <a href="#"><i class="lab la-linkedin-in"></i></a>
                </div>

            </div>

        </div>

    </footer>

    <!-- Bootstrap -->
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
