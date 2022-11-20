<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Novedad extends Model
{
   // use HasFactory;
   
   protected $table = 'novedades';
    protected $primaryKey = 'novedad_id';
    protected $fillable = [
        'novedad_id',
        'usuario_id',
        'titulo',
        'texto',
        'sinospsis',	
        'imagen',
        'imagen_descripcion',
        'publico',
    ];

    public const VALIDATE_RULES = [
        'titulo' => 'required|min:2|max:100',
        'texto' => 'required|min:50|max:100000',
        'sinopsis' => 'required|min:20|max:255',
        'imagen_descripcion' => 'required|min:10|max:255',
    ];

    public const VALIDATE_MESSAGES = [
        'titulo.required' => 'El titulo debe llevar un valor.',
        'titulo.min' => 'El titulo debe tener al menos :min caracteres.',
        'titulo.max' => 'El titulo puede tener hasta :max caracteres.',
        'texto.required' => 'El texto debe llevar un valor.',
        'texto.min' => 'El texto debe tener al menos :min caracteres.',
        'texto.max' => 'El texto no puede superar los $ :max.',
        'sinopsis.required' => 'La sinopsis debe llevar un valor.',
        'sinopsis.min' => 'La sinopsis debe tener al menos :min caracteres.',
        'sinopsis.max' => 'La sinopsis puede tener hasta :max caracteres.',
        'imagen_descripcion.required' => 'La descripcion de la imagen debe llevar un valor.',
        'imagen_descripcion.min' => 'La descripcion de la imagen debe tener al menos :min caracteres.',
        'imagen_descripcion.max' => 'La descripcion de la imagen puede tener hasta :max caracteres.',
    ];

   
}