@extends('layouts.main')

@section('title', 'Novedades')
@section('novedades', 'active')

@section('main')


<section id="featured" class="my-5 py-5">

    <div class="container mt-5 py-5">

        <h1 class="font-weight-bold">Novedades</h1>
        <hr>


         <div class="row gx-5 ">


            <div class="card col-md-5 my-2 mx-2" style="width: 15rem;">
                        <article>
                        <picture >
                        <img src="{{ Storage::disk('public')->url('imgs/familia.jpg') }}" class="card-img-top pt-3 " alt="...">
                                        </picture>

                        <div class="card-body">
                            <h2 class="card-title">Título novedad</h2>
                            <p class="card-text">Texto sobre la novedad escrita por el usuario</p>
                        </div>

                        {{-- <div class="card-body">
                            <a class="card-link @yield('novedad_detalle')" href="{{ route('novedad_detalle') }}"><h3 class="h6"><span>Link novedad</span></h3></a>
                        </div> --}}
                        </article>

            </div>


         </div>
    </div>

