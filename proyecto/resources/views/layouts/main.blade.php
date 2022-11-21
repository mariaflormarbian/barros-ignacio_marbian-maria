<!DOCTYPE html>
<html lang="es">

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

            <img src="{{ Storage::disk('public')->url('imgs/logo.png') }}" width="50" height="50"
                alt="Logo ieta color negro">

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
                        <a class="nav-link @yield('novedades')" href="{{ route('novedades') }}">Novedades</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link @yield('carrito')" href="#"><i
                                class="las la-shopping-bag not-active"></i></a>
                    </li>

                    @auth

                        @if ( Illuminate\Support\Facades\Auth::user()->roles === 1 )
                        
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.productos.index') }}">Admin</a>
                            </li>
                            
                        @endif

                        <li class="nav-item">
                            <form action="{{route('auth.logout')}}" method="post">
                                @csrf
                                <button class="bg-white text-dark pt-0" id="cerrar" type="submit">Cerrar Sesión ({{ Illuminate\Support\Facades\Auth::user()->nombre }})</button>
                            </form>
                        </li>

                    @elseguest

                        <li class="nav-item">
                            <a class="nav-link" @yield('iniciar-sesion') href="{{ route('auth.login.form') }}">Iniciar
                                Sesion</a>
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

                <img src="{{ Storage::disk('public')->url('imgs/logo_footer.png') }}" alt="Logo ieta color blanco">

                <h2 class="pt-3 text-white h5">Podés visitarnos en nuestro Showroom</h2>

                <div class=" col-lg-3 col-md-6 col-12 mb-4">
                    <img src="{{ Storage::disk('public')->url('imgs/payment.png') }}"
                        alt="Tarjetas de crédito Visa, Discover y tarjeta de débito Maestro">
                </div>

            </div>


            <div class="footer-one col-lg-4 col-md-6 col-12 mb-3 ">

                <h3 class="pb-2 h5 text-white">Contactános</h3>

                <div>
                    <h4 class="text-uppercase h6 text-white">Dirección</h4>
                    <p>Juana azurduy 2435, CABA</p>
                </div>

                <div>
                    <h4 class="text-uppercase h6 text-white">Whatsapp</h4>
                    <p>(011) 3427-9989</p>
                </div>



            </div>

            <div class="footer-one col-lg-4 col-md-6 col-12 mb-3">

                <h3 class="pb-2 h5 text-white">Instagram</h3>

                <div class="row">


                    <img class="img-fluid w-25 h-100 m-2"
                        src="{{ Storage::disk('public')->url('imgs/chupin_key.jpg') }}"
                        alt="posteo de instagram chupin key">
                    <img class="img-fluid w-25 h-100 m-2"
                        src="{{ Storage::disk('public')->url('imgs/chupin_aion.jpg') }}"
                        alt="posteo de instagram chupin aion">
                    <img class="img-fluid w-25 h-100 m-2"
                        src="{{ Storage::disk('public')->url('imgs/chupin_eros.jpg') }}"
                        alt="posteo de instagram chupin eros">
                    <img class="img-fluid w-25 h-100 m-2"
                        src="{{ Storage::disk('public')->url('imgs/chupin_farah.jpg') }}"
                        alt="posteo de instagram chupin farah">
                    <img class="img-fluid w-25 h-100 m-2"
                        src="{{ Storage::disk('public')->url('imgs/chupin_satya.jpg') }}"
                        alt="posteo de instagram chupin satya">

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