<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categorias')->insert( [

            [
                'categoria_id' => 1,
                'nombre' => 'Mom',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'categoria_id' => 2,
                'nombre' => 'Chupín',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'categoria_id' => 3,
                'nombre' => 'Oxford',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'categoria_id' => 4,
                'nombre' => 'Pollera',
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

            ]);
    }
}
