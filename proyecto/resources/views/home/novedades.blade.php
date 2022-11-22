@extends('layouts.main')

@section('title', 'Novedades')
@section('novedades', 'active')

@section('main')


<section id="featured" class="my-5 py-5">

    <div class="container mt-5 py-5">
        <h1 class="font-weight-bold">Novedades</h1>
        <hr>
        
         <div class="row gx-5 ">

        @foreach($novedades as $novedad)

        @if ($novedad->publico)
            <div class="card col-md-5 my-2 mx-2" style="width: 15rem;">
                        <article>
                        <picture >
                          <img class="card-img-top pt-3" src="{{ Storage::disk('public')->url('imgs/' . $novedad->imagen) }}"
                    alt="{{ $novedad->imagen_descripcion }}">    

                                        </picture>

                        <div class="card-body">
                            <h2 class="card-title">{{ $novedad->titulo }}</h2>
                            <p class="card-text">{{ $novedad->sinopsis }}</p>
                        </div>

                        <div class="card-body">
                            <a class="card-link @yield('novedad_detalle')" href="{{ route('novedad.detalle', ['id' => $novedad->novedad_id]) }}"><h3 class="h6"><span>Link {{ $novedad->titulo }}</span></h3></a>
                        </div>
                        </article>
            </div>
        @endif

        @endforeach

         </div>
    </div>
</section>
@endsection