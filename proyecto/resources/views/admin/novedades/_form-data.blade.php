<?php

    /** @var \App\Models\Novedad $novedad */

    $publico = $novedad->publico ?? null;
    $imagen_descripcion = $novedad->imagen_descripcion ?? null;
    $imagen = $novedad->imagen ?? null;

?>


{{-- Usuario --}}
<div class="visually-hidden">

    <label for="usuario_id" class="form-label">Usuario</label>
    <input
        type="number"
        id="usuario_id"
        name="usuario_id"
        class="form-control"
        value="{{ \Illuminate\Support\Facades\Auth::user()->usuario_id }}"
    >

</div>

{{-- Titulo --}}
<div class="col-md-4">

    <label for="titulo" class="form-label">Título</label>
    <input
        type="text"
        id="titulo"
        name="titulo"
        class="form-control"
        value="{{ old('titulo', $novedad->titulo ?? '') }}"
        @error('titulo') aria-describedby="error-titulo" @enderror
    >
    <p><small>El título debe contener un mínimo de 2 caractéres y hasta 100</small></p>

    @error ('titulo')

    <div class="text-danger fs-6" id="error-titulo"><span class="visually-hidden">Error:</span>{{ $message }}</div>

    @enderror

</div>

{{--Texto--}}
<div class="col-md-4">

    <label for="texto" class="form-label">Texto</label>
    <textarea
        type="text"
        id="texto"
        name="texto"
        class="form-control"
        value="{{ old('texto', $novedad->texto ?? '') }}"
        @error('texto') aria-describedby="error-texto" @enderror
    ></textarea>
    <p><small>El texto debe contener un mínimo de 50 caractéres</small></p>

    @error ('texto')

    <div class="text-danger fs-6" id="error-texto"><span class="visually-hidden">Error:</span>{{ $message }}</div>

    @enderror

</div>

{{--Sinópsis--}}
<div class="col-md-4">

    <label for="sinopsis" class="form-label">Sinópsis</label>
    <textarea
        type="text"
        id="sinopsis"
        name="sinopsis"
        class="form-control"
        value="{{ old('sinopsis', $novedad->sinopsis ?? '') }}"
        @error('sinopsis') aria-describedby="error-sinopsis" @enderror
    ></textarea>
    <p><small>La sinópsis debe contener un mínimo de 20 caractéres</small></p>

    @error ('sinopsis')

    <div class="text-danger fs-6" id="error-sinopsis"><span class="visually-hidden">Error:</span>{{ $message }}</div>

    @enderror

</div>

<!-- Público -->
<div class="col-md-2 align-items-center d-flex">

    <div class="form-check form-switch ">
        <label for="publico" class="form-check-label">Público</label>
        <input
            type="checkbox"
            id="publico"
            name="publico"
            class="form-check-input"
            @if(old('publico') == 1 or $publico) checked @endif
            value="{{ old('publico', 1) }}"
        >

    </div>

</div>

{{-- Imagen --}}
<div class="mb-3" id="info-imagen">
    @if ($imagen !=null && Storage::disk('public')->has('imgs/' . $novedad->imagen))
        <p>Imagen actual</p>

        <img src="{{ Storage::disk('public')->url('imgs/' . $imagen) }}" class="d-block mx-auto img-fluid" alt="{{$imagen_descripcion}} ">

        <p class="visually-hidden">Hay una imagen cargada</p>
        <p class="text-center">Para mantener la misma imagen, tiene que quedar como se encuentra</p>
    @else
        <p>Actualmente no hay ninguna imagen cargada.</p>
    @endif

</div>
<div class="col-md-6">

    <label for="imagen" class="form-label">Imagen</label>
    <input
        type="file"
        id="imagen"
        name="imagen"
        class="form-control"
        @error('imagen') aria-describedby="error-imagen" @enderror
    >

    @error ('imagen')

        <div class="text-danger fs-6" id="error-imagen"><span class="visually-hidden">Error:</span>{{ $message }}</div>

    @enderror


</div>

{{-- Imagen Descripcion --}}
<div class="col-md-6">

    <label for="imagen_descripcion" class="form-label">Descripción de la Imagen</label>
    <input
        type="text"
        id="imagen_descripcion"
        name="imagen_descripcion"
        class="form-control"
        value="{{ old('imagen_descripcion', $novedad->imagen_descripcion ?? '') }}"
        @error('imagen_descripcion') aria-describedby="error-imagen_descripcion" @enderror
    >

    @error ('imagen_descripcion')

    <div class="text-danger fs-6" id="error-imagen_descripcion"><span class="visually-hidden">Error:</span>{{ $message }}</div>
    @enderror

</div>

