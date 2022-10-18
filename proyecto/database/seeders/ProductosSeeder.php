<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('productos')->insert([
        [
            'producto_id'=>1,
            'categoria_id'=>4,
            'nombre'=>'Mini Owen',
            'precio'=>1049900,
            'descripcion'=>'Mini con calce tiro alto, rígida, color azul, con 5 bolsillos, avíos metálicos personalizados y badana simil cuero. Terminación desflecada.',
            'imagen'=> 'pollera_miniowen.jpg',
            'imagen_descripcion'=>'Modelo posando pollera mini owen color negro',
            'destacado'=> false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>2,
            'categoria_id'=>4,
            'nombre'=>'Mini Vasby',
            'precio'=>1049900,
            'descripcion'=>'Mini con calce tiro alto, elastizada, color celeste, con 5 bolsillos. Avíos metalicos personalizados y badana simil cuero. Terminación desflecada. El calce es confort debido a su altisima elasticidad.',
            'imagen'=> 'pollera_minivasby.jpg',
            'imagen_descripcion'=>'Modelo posando pollera mini vasby',
            'destacado'=> true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>3,
            'categoria_id'=>4,
            'nombre'=>'Mini Alice',
            'precio'=>1049900,
            'descripcion'=>'Mini con calce tiro alto, elastizada, color blanco, con 5 bolsillos. Avíos metalicos personalizados y badana simil cuero. Terminación desflecada. El calce es confort debido a su altisima elasticidad.',
            'imagen'=> 'pollera_minialice.jpg',
            'imagen_descripcion'=>'Modelo posando pollera mini alice color blanco',
            'destacado'=> false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>4,
            'categoria_id'=>4,
            'nombre'=>'Mini Rayner',
            'precio'=>1025900,
            'descripcion'=>'Mini con calce tiro alto, elastizada, color celeste nevado, con 5 bolsillos. Avíos metalicos personalizados y badana simil cuero. Terminación desflecada. El calce es confort debido a su altisima elasticidad.',
            'imagen'=> 'pollera_minialice.jpg',
            'imagen_descripcion'=>'Modelo posando pollera mini rayner color azul',
            'destacado'=> false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>5,
            'categoria_id'=>4,
            'nombre'=>'Mini Alina',
            'precio'=>1039900,
            'descripcion'=>'Mini con calce tiro alto, rigída, color negro nevado, con 5 bolsillos. Avíos metalicos personalizados y badana simil cuero. Terminación desflecada.',
            'imagen'=> 'pollera_minialina.jpg',
            'imagen_descripcion'=>'Modelo posando pollera mini alina color azul',
            'destacado'=> false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>6,
            'categoria_id'=>4,
            'nombre'=>'Mini Candace',
            'precio'=>1039930,
            'descripcion'=>'Mini con calce tiro alto, elastizada, color negro, con 5 bolsillos. Avíos metalicos personalizados y badana simil cuero. Terminación desflecada. El calce es confort debido a su altisima elasticidad.',
            'imagen'=> 'pollera_minicandace.jpg',
            'imagen_descripcion'=>'Modelo posando pollera mini candace color negro',
            'destacado'=> false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>7,
            'categoria_id'=>2,
            'nombre'=>'Chupín Satya',
            'precio'=>1099970,
            'descripcion'=>'Jean color azul clásico, elastizado, tiro alto, de 5 bolsillos. Pierna ajustada, botamanga chupin y largo estándar. Ruedo clásico. El calce es confort debido a su altisima elasticidad. Avíos metalicos personalizados y badana simil cuero.',
            'imagen'=> 'chupin_satya.jpg',
            'imagen_descripcion'=>'Modelo posando chupín satya color azul',
            'destacado'=> false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>8,
            'categoria_id'=>2,
            'nombre'=>'Chupín Aion',
            'precio'=>1029980,
            'descripcion'=>'Jean color celeste, elastizado, tiro alto, de 5 bolsillos. Pierna ajustada, botamanga chupin y largo estándar. Ruedo clásico. El calce es confort debido a su altisima elasticidad. Avíos metalicos personalizados y badana simil cuero.',
            'imagen'=> 'chupin_aion.jpg',
            'imagen_descripcion'=>'Modelo posando chupín aion color celeste',
            'destacado'=> true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>9,
            'categoria_id'=>2,
            'nombre'=>'Chupín Farah',
            'precio'=>1049900,
            'descripcion'=>'Jean color blanco, elastizado, tiro alto, de 5 bolsillos. Pierna ajustada, botamanga chupin y largo estándar. Ruedo clásico. El calce es confort debido a su altisima elasticidad. Avíos metalicos personalizados y badana simil cuero.',
            'imagen'=> 'chupin_farah.jpg',
            'imagen_descripcion'=>'Modelo posando con chupín farah',
            'destacado'=> false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>10,
            'categoria_id'=>2,
            'nombre'=>'Chupín Key',
            'precio'=>1049900,
            'descripcion'=>'Jean color azul con desgaste, elastizado, tiro alto, de 5 bolsillos. Pierna ajustada, botamanga chupin y largo estándar. Ruedo clásico. El calce es confort debido a su altisima elasticidad. Avíos metalicos personalizados y badana simil cuero.',
            'imagen'=> 'chupin_key.jpg',
            'imagen_descripcion'=>'Modelo posando con chupín key color azul ',
            'destacado'=> true,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>11,
            'categoria_id'=>2,
            'nombre'=>'Chupín Eros',
            'precio'=>1078900,
            'descripcion'=>'Jean color celeste, elastizado, tiro alto, de 5 bolsillos. Pierna ajustada, botamanga chupin y largo estándar. Ruedo clásico. El calce es confort debido a su altisima elasticidad. Avíos metalicos personalizados y badana simil cuero.',
            'imagen'=> 'chupin_eros.jpg',
            'imagen_descripcion'=>'Modelo posando con chupín eros color celeste',
            'destacado'=> false,
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'producto_id'=>12,
            'categoria_id'=>1,
            'nombre'=>'Mom Sassy',
            'precio'=>1048800,
            'descripcion'=>'Jean con calce tiro alto, rigído, pierna recta, ruedo clásico. Largo estándar. Color azul, con 5 bolsillos. Avíos metalicos personalizados y badana simil cuero. Calce 100% rigído debido a su composición.',
            'imagen'=> 'mom_sassy.jpg',
            'imagen_descripcion'=>'Modelo posando con jean mom sassy',
            'destacado'=> true,
            'created_at' => now(),
            'updated_at' => now(),
        ]
]);
    }
}
