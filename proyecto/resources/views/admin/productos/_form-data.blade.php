<?php

    /** @var \App\Models\Producto $producto */
    /** @var \Illuminate\Database\Eloquent\Collection| \App\Models\Categoria[] $categorias */
    /** @var \Illuminate\Database\Eloquent\Collection| \App\Models\Talles[] $talles */

    $destacado = $producto->destacado ?? null;
    $publico = $producto->publico ?? null;
    $imagen_descripcion = $producto->imagen_descripcion ?? null;
    $imagen = $producto->imagen ?? null;
    $categoriaId = $producto->categoria_id ?? '';

    if (isset($producto)) {
        $tallesArray = $producto->getTallesId();
    }else{
        $tallesArray = [];
    }

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
<div class="col-md-2 align-items-center d-flex">

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

<!-- Publico -->
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

<!-- Imagen -->
<div class="mb-3" id="info-imagen">
    @if ($imagen !=null && Storage::disk('public')->has('imgs/' . $producto->imagen))
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

{{--Categorías--}}
<div class="col-md-6">

    <label for="categoria_id" class="form-label">Categorías</label>

    <select name="categoria_id" id="categoria_id" class="form-control"
        @error('categoria_id') aria-describedby="error-categoria_id" @enderror
    >
        @foreach($categorias as $categoria)

            <option
                value="{{ $categoria->categoria_id ?? '' }}"
                @selected($categoria->categoria_id == old('categoria_id', $categoriaId))
            >{{ $categoria->nombre}}</option>

        @endforeach

    </select>

    @error ('categoria_id')

        <div class="text-danger fs-6" id="error-categoria_id"><span class="visually-hidden">Error:</span>{{ $message }}</div>

    @enderror

</div>

{{--Talles--}}
<div class="col-md-6">

    <fieldset class="mb-3">

        <legend>Talles</legend>

        @foreach ($talles as $talle)

            <div class="form-check form-check-inline">

                <input
                    type="checkbox"
                    class="form-check-input"
                    id="talle-{{ $talle->talle_id }}"
                    name="talles[]"
                    value="{{ $talle->talle_id }}"
                    @checked(in_array($talle->talle_id, old('talles', $tallesArray)))
                >
                <label for="talle-{{ $talle->talle_id }}" class="form-check-label">{{ $talle->nombre }}</label>

            </div>

        @endforeach

    </fieldset>

</div>

{{-- Descripcion --}}
<div class="col-md-12">

    <label for="descripcion" class="form-label">Descripción</label>
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
