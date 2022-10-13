






















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') : : DV Peliculas</title>

    <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">

</head>
<body>

    <div id="app">
    
        <nav class="navbar navbar-expand-lg bg-light">

            <div class="container-fluid">

                <a class="navbar-brand" href="{{ route('home') }}">DV Películas</a>

                <button 
                    class="navbar-toggler" 
                    type="button" 
                    data-bs-toggle="collapse" 
                    data-bs-target="#navbarNav" 
                    aria-controls="navbarNav" 
                    aria-expanded="false" 
                    aria-label="Mostrar/Ocultar Navegacion">

                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav">

                        <li class="nav-item">
                            
                            <!-- La funcion url() crea una URL absoluta a la carpeta "public" del proyecto, de manera dinamica. 
                            
                            Usamos la funcion route() para indicar el nombre que asociamos en [proyecto\routes\web.php] a la ruta que le corresponde. De esta manera, si queremos cambiar el nombre original de la ruta es mas facil ya que queda asignado por medio de la variable.
                            -->

                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('quienes-somos') }}">Quienes Somos</a>
                        </li>

                        {{-- El metodo "check()" de Auth retorna true si el usuario esta autenticado --}}
                        {{-- @if (Auth::check()) --}}
                        {{-- Podemos tambien usar las directivas de Blade para este fin --}}
                        @auth

                            {{-- Para defirnir quien tiene acceso a cada pantalla y evitar que el usuario entre cambiando la url utilizamos un middlewar en [proyecto\routes\web.php] --}}
                            
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.peliculas.index') }}">Administrar Películas</a>
                            </li>
                            
                            <li class="nav-item">
                                <form action="{{ route('auth.logout') }}" method="POST">
                                    @csrf
                                    <button class="btn nav-link" type="submit">Cerrar Sesion</button>
                                </form>
                            </li>
                        
                        {{-- Si es, en cambio, un 'invitado'... --}}
                        @else

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('auth.login.form') }}">Iniciar Sesion</a>
                            </li>

                        @endauth
                        {{-- @endif --}}

                    </ul>

                </div>

            </div>

        </nav>

        <main class="container py-3">

            {{-- Session es la clase para manejo de sesiones de Laravel --}}
            @if (Session::has('statusMessage'))

                <div class="alert alert-{{ Session::get('statusType') ?? 'info' }} mb-3">{!! Session::get('statusMessage') !!}</div>
                
            @endif


            {{-- La directiva @yield define un espacio que este archivo va a "ceder" a cualquier otra vista que "extienda" o "herede" de este template. --}}
            @yield('main')
        </main>

        <footer class="footer">
            <p>Da Vinci &copy; 2022</p>
        </footer>

    </div>

</body>
</html>
