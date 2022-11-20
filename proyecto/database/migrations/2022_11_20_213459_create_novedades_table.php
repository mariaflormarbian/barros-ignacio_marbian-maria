<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('novedades', function (Blueprint $table) {
            $table->id('novedad_id');
            $table->foreignId('usuario_id')->constrained('usuarios', 'usuario_id');
            $table->string('titulo', 100);
            $table->text('texto');
            $table->string('sinopsis', 255);
            $table->string('imagen', 255)->nullable();
            $table->string('imagen_descripcion', 255)->nullable();
            $table->boolean('publico');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('novedades');
    }
};