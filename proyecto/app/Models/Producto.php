<?php

namespace App\Models;

use Arr;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Producto
 *
 * @property int $producto_id
 * @property int $categoria_id
 * @property string $nombre
 * @property int $precio
 * @property string $descripcion
 * @property string|null $imagen
 * @property string|null $imagen_descripcion
 * @property int $destacado
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Categoria $categoria
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
 * @method static \Illuminate\Database\Eloquent\Builder|Producto whereCategoriaId($value)
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Talle[] $talles
 * @property-read int|null $talles_count
 * @property int $publico
 * @method static \Illuminate\Database\Eloquent\Builder|Producto wherePublico($value)
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
        'destacado',
        'publico',
    ];

    public const VALIDATE_RULES = [
        'nombre' => 'required|min:2|max:50',
        'precio' => 'numeric|required|min:0|max:100000',
        'descripcion' => 'required|min:50|max:800',
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
        'imagen_descripcion.required' => 'La descripcion de la imagen debe llevar un valor.',
        'imagen_descripcion.min' => 'La descripcion de la imagen debe tener al menos :min caracteres.',
        'imagen_descripcion.max' => 'La descripcion de la imagen puede tener hasta :max caracteres.',
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class,'categoria_id','categoria_id');
    }

    public function talles()
    {
        return $this->belongsToMany(
            Talle::class,
            'productos_tienen_talles',
            'producto_id',
            'talle_id',
            'producto_id',
            'talle_id',
        );
    }

    public function getTallesId(): array
    {
        return $this->talles->pluck('talle_id')->toArray();
    }
 
    public function getCategoriaId(): int
    {
        return $this->categoria->categoria_id;
    }

    protected function precio():Attribute
    {
        return Attribute::make(
            get: fn($value)=> $value / 100,
            set: fn ($value)=> $value * 100,
        );
    }
    
}
