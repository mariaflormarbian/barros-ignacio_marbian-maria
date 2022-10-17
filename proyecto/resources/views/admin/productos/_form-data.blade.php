<?php
/** @var \App\Models\Producto $producto */
$destacado = $producto->destacado ?? null;
$imagen = $producto->imagen ?? null;
$imagen_descripcion = $producto->imagen_descripcion ?? null;

?>


<!-- Nombre -->
<div class="col-md-4">

    <label for="nombre" class="form-label">Nombre</label>
    <input
        type="text"
        id="nombre"
        name="nombre"
        class="form-control"
        value="{{ old('nombre', $producto->nombre ?? '') }}"
        @error('nombre') aria-describedby="error-nombre" @enderror
    >

    @error ('nombre')

    <div class="text-danger fs-6" id="error-nombre"><span class="visually-hidden">Error:</span>{{ $message }}</div>

    @enderror

</div>

<!-- Precio -->
<div class="col-md-4">

    <label for="precio" class="form-label">Precio</label>
    <input
        type="number"
        id="precio"
        name="precio"
        class="form-control"
        value="{{ old('precio', $producto->precio ?? '') }}"
        @error('precio') aria-describedby="error-precio" @enderror
    >

    @error ('precio')

    <div class="text-danger fs-6" id="error-precio"><span class="visually-hidden">Error:</span>{{ $message }}</div>

    @enderror
</div>

<!-- Destacado -->
<div class="col-md-4 align-items-center d-flex">

    <div class="form-check form-switch ">
        <label for="destacado" class="form-check-label">Destacado</label>
        <input
            type="checkbox"
            id="destacado"
            name="destacado"
            class="form-check-input"
            @if(old('destacado') == 1 or $destacado) checked @endif
            value="{{ old('destacado', 1) }}"
        >

    </div>

</div>

<!-- Imagen -->
<div class="mb-3" id="info-imagen">
    @if ($imagen !=null && Storage::disk('public')->has('imgss/' . $producto->imagen))
        <p>Imagen actual</p>

        <img src="{{url('storage/imgss/' . $imagen)}}" class="d-block mx-auto img-fluid" alt="{{url($imagen_descripcion)}} ">
        <p class="visually-hidden">Hay una imagen cargada</p>
        <p class="text-center">Para mantener la misma imagen, tiene que quedar como se encuentra</p>
    @else
        Actualmente no hay ninguna imagen cargada.
    @endif

</div>
<div class="col-md-6">

    <label for="imagen" class="form-label">Imagen</label>
    <input
        type="file"
        id="imagen"
        name="imagen"
        value="{{ old('imagen', $producto->imagen ?? '') }}"
        class="form-control"
        aria-describedby="info-imagen"
    >


</div>

<!-- Imagen Descripcion -->
<div class="col-md-6">

    <label for="imagen_descripcion" class="form-label">Descripción de la Imagen</label>
    <input
        type="text"
        id="imagen_descripcion"
        name="imagen_descripcion"
        class="form-control"
        value="{{ old('imagen_descripcion', $producto->imagen_descripcion ?? '') }}"
        @error('imagen_descripcion') aria-describedby="error-imagen_descripcion" @enderror
    >

    @error ('imagen_descripcion')

    <div class="text-danger fs-6" id="error-imagen_descripcion"><span class="visually-hidden">Error:</span>{{ $message }}</div>
    @enderror

</div>

{{-- Descripcion --}}
<div class="col-md-12">

    <label for="descripcion" class="form-label">Descripcion</label>
    <textarea
        id="descripcion"
        name="descripcion"
        class="form-control"
        @error('descripcion') aria-describedby="error-descripcion" @enderror
                                >{{ old('descripcion', $producto->descripcion ?? '') }}</textarea>

    @error ('descripcion')

    <div class="text-danger fs-6" id="error-descripcion"><span class="visually-hidden">Error:</span>{{ $message }}</div>

    @enderror

</div>
