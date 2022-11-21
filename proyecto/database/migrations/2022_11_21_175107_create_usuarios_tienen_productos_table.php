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
        Schema::create('usuarios_tienen_productos', function (Blueprint $table) {

            $table->foreignId('producto_id')->constrained('productos', 'producto_id');
            
            $table->foreignId('usuario_id')->constrained('usuarios', 'usuario_id');

            $table->primary(['producto_id', 'usuario_id']);

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
        Schema::dropIfExists('usuarios_tienen_productos');
    }
};
