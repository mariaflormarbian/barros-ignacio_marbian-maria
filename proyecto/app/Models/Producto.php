<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Producto
 *
 * @property int $producto_id
 * @property string $nombre
 * @property int $precio
 * @property string $descripcion
 * @property string|null $imagen
 * @property string|null $imagen_descripcion
 * @property int $destacado
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto query()
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereDestacado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereImagen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereImagenDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto wherePrecio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereProductoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int $categoria_id
 * @property-read \App\Models\Categoria $categoria
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCategoriaId($value)
 */
class Producto extends Model
{
    //use HasFactory
    protected $table = 'productos';
    protected $primaryKey = 'producto_id';
    protected $fillable = [
        'categoria_id',
        'nombre',
        'precio',
        'descripcion',
        'imagen',
        'imagen_descripcion',
        'destacado'
    ];

    public const VALIDATE_RULES = [
        'nombre' => 'required|min:2|max:50',
        'precio' => 'numeric|required|min:0|max:100000',
        'descripcion' => 'required|min:50|max:800',
        'imagen' => 'required',
        'imagen_descripcion' => 'required|min:10|max:255',
    ];

    public const VALIDATE_MESSAGES = [
        'nombre.required' => 'El nombre debe llevar un valor.',
        'nombre.min' => 'El nombre debe tener al menos :min caracteres.',
        'nombre.max' => 'El nombre puede tener hasta :max caracteres.',
        'precio.numeric' => 'El precio debe ser un numero.',
        'precio.required' => 'El precio debe llevar un valor.',
        'precio.min' => 'El precio debe ser un valor positivo.',
        'precio.max' => 'El precio no puede superar los $ :max.',
        'descripcion.required' => 'La descripcion debe llevar un valor.',
        'descripcion.min' => 'La descripcion debe tener al menos :min caracteres.',
        'descripcion.max' => 'La descripcion puede tener hasta :max caracteres.',
        'imagen.required'=>'Debe subir una imagen',
        'imagen_descripcion.required' => 'La descripcion de la imagen debe llevar un valor.',
        'imagen_descripcion.min' => 'La descripcion de la imagen debe tener al menos :min caracteres.',
        'imagen_descripcion.max' => 'La descripcion de la imagen puede tener hasta :max caracteres.',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categoria_id','categoria_id');
    }

}
