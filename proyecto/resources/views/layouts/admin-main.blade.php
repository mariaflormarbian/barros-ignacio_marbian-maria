
<!doctype html>
<html lang="es">
    <head>
        <!-- Required meta tags -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') : : Ieta</title>

        <!-- Fuentes -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Rubik&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

        <!-- Style.css -->
        <link rel="stylesheet" href="{{ url('css/style.css') }}">

        <!-- Iconos -->
        <link rel="stylesheet" href="{{ url('css/line-awesome.min.css') }}">

    </head>

    <body>


        <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">

            <div class="offcanvas-header">
                <p class="h3 offcanvas-title" id="offcanvasWithBothOptionsLabel">Ieta.</p>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>

            <div class="sidebar offcanvas-body">

                <nav class="sidebar-menu">

                    <ul class="list-unstyled">
                        <li>
                            <a href="{{ route('home') }}" class="nav-link"><span class="las la-receipt"></span><span>Volver a home</span> </a>
                        </li>
                        <li>
                            <form action="{{route('auth.logout')}}" method="post">
                                @csrf
                                <button class=" nav-link" type="submit"><span class="las la-user-circle">Cerrar Sesión</button>
                            </form>
                        </li>

                    </ul>

                </nav>

            </div>

        </div>

        <main class="main-content">

            <header>

                <div class=" d-flex">
                    <button class="btn btn-menu"  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/></svg>
                    </button>
                    <h1>@yield('h1')</h1>
                </div>




            </header>

            @yield('main')

        </main>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        @yield('script')

    </body>

</html>
