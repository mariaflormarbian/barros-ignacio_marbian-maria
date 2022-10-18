<!DOCTYPE html>
<html lang=es"">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') : : Ieta</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ url('css/bootstrap.min4.css') }}">
    <!-- Css -->
    <link rel="stylesheet" href="{{ url('css/style.css') }}">
    <!-- Iconos -->
    <link rel="stylesheet" href="{{ url('css/line-awesome.min.css') }}">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">

        <div class="container">

            <img src="{{ url('storage/imgs/logo.png') }}" width="50" height="50" alt="Logo ieta color negro">

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span><i id="bar" class="las la-bars"></i></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link @yield('home')" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('productos')" href="{{ route('productos') }}">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('contacto')" href="{{ route('contacto') }}">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('sobre-nosotros')" href="{{ route('sobre.nosotros') }}">Sobre Nosotros</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @yield('carrito')" href="#"><i class="las la-shopping-bag not-active"></i></a>
                    </li>
                    @auth
                        <li class="nav-item">
                        <li class="nav-item">
                            <a class="nav-link"  href="{{ route('admin.productos.index') }}">Admin</a>
                        </li>
                        </li>
                        <li class="nav-item">
                        <form action="{{route('auth.logout')}}" method="post">
                            @csrf
                            <button class="zapallo" type="submit">Cerrar Sesión</button>
                        </form>
                    </li>
                    @elseguest
                        <li class="nav-item">
                            <a class="nav-link" @yield('iniciar-sesion') href="{{ route('auth.login.form') }}">Iniciar Sesion</a>
                        </li>
                    @endauth



                </ul>

            </div>

        </div>

    </nav>

    <main>

        @yield('main')

    </main>

    <footer class="mt-5 py-5">

        <div class="row container mx-auto pt-5">

            <div class="footer-one col-lg-4 col-md-6 col-12">

                <img src="{{ url('storage/imgs/logo_footer.png') }}"  alt="Logo ieta color blanco">

                <p class="pt-3">Podés visitarnos en nuestro Showroom</p>

                <div class="col-lg-3 col-md-6 col-12 mb-4">
                    <img src="{{ url('storage/imgs/payment.png') }}" alt="">
                </div>

            </div>


            <div class="footer-one col-lg-4 col-md-6 col-12 mb-3">

                <h5 class="pb-2">Contactános</h5>

                <div>
                    <h6 class="text-uppercase">Dirección</h6>
                    <p>Juana azurduy 2435, CABA</p>
                </div>

                <div>
                    <h6 class="text-uppercase">Whatsapp</h6>
                    <p>(011) 3427-9989</p>
                </div>



            </div>

            <div class="footer-one col-lg-4 col-md-6 col-12 mb-3">

                <h5 class="pb-2">Instagram</h5>

                <div class="row">

                    {{-- NOTA: Adaptar un foreach --}}
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('storage/imgs/chupin_key.jpg') }}" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('storage/imgs/chupin_aion.jpg') }}" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('storage/imgs/chupin_eros.jpg') }}" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('storage/imgs/chupin_farah.jpg') }}" alt="">
                    <img class="img-fluid w-25 h-100 m-2" src="{{ url('storage/imgs/chupin_satya.jpg') }}" alt="">

                </div>

            </div>

        </div>

        <div class="copyright mt-5">

            <div class="row container mx-auto">

                <div class="text-center col-12 text-nowrap mb-2">
                    <p>ieta eCommerce © 2022. Todos los derechos reservados</p>
                </div>
                <div class="text-center col-12">
                    <a href="https://www.facebook.com/"><i class="lab la-facebook-f"></i></a>
                    <a href="https://twitter.com/"><i class="lab la-twitter"></i></a>
                    <a href="https://linkedin.com/"><i class="lab la-linkedin-in"></i></a>
                </div>

            </div>

        </div>

    </footer>

    <!-- Bootstrap -->
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
    @yield('script')

</body>

</html>
