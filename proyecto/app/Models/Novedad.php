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
        'usuario_id',
        'titulo',
        'texto',
        'sinopsis',	
        'publico',
        'imagen',
        'imagen_descripcion',
    ];

    public const VALIDATE_RULES = [
        'titulo' => 'required|min:2|max:100',
        'texto' => 'required|min:50|max:100000',
        'sinopsis' => 'required|min:20|max:255',
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
    ];


}