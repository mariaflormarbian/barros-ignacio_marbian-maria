@extends('layouts.main')

@section('title', 'Novedad Detalle')

@section('main')



<section class="container">
      <h1 class="font-weight-bold">Novedad detalle</h1>
        <hr>
    <article>
        <div class=" card-body">
            <h2 class="mb-1">Título novedad</h2>           
            <p>Texto novedad</p>
        </div>
        <picture>
         <img src="{{ Storage::disk('public')->url('imgs/familia.jpg') }}" class="card-img-top" alt="...">
        </picture>
    </article>
</section>
