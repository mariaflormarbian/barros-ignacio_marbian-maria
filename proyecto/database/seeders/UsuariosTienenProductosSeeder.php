<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuariosTienenProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios_tienen_productos')->insert([
            [
                'producto_id' => 1,
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 11,
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 12,
                'usuario_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],



            [
                'producto_id' => 2,
                'usuario_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 5,
                'usuario_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 8,
                'usuario_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 10,
                'usuario_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 7,
                'usuario_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'producto_id' => 5,
                'usuario_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'producto_id' => 6,
                'usuario_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
