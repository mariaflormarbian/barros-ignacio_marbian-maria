<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class NovedadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('novedades')->insert([
            [
                'novedad_id'=>1,
                'usuario_id'=>1,
                'titulo'=>'Black ieta',
                'texto'=>'Aprovechá el 50% de descuento en todos los productos de la marca Black ieta, van a estar disponibles el día viernes 25/12 a partir de las 00:00hs. Con respecto a los envíos van a tenes 0 costo. ¡No te lo pierdas!',
                'sinopsis'=>'Hasta 50% de descuento en productos seleccionados de la marca Black ieta...',
                'imagen'=> 'black_ieta.jpg',
                'imagen_descripcion'=>'Descuento 50% off en black ieta',
                'publico' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'novedad_id'=>2,
                'usuario_id'=>1,
                'titulo'=>'Garage sale',
                'texto'=>'Aprovechá los descuentos en productos seleccionados de segunda mano. Algunos tienen pequeños detalles, otros no tanto pero ninguno pierde la esencia de la marca. Cada producto se encuentra con una marca de precio, el precio que figura es el precio final. ¡Te esperamos este miércoles 23/11 en nuestro showroom!',
                'sinopsis'=>'Productos de segunda mano con descuentos en nuestro showroom...',
                'imagen'=> 'garage_sale.jpg',
                'imagen_descripcion'=>'Garage sale de la marca ieta en showroom',
                'publico' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'novedad_id'=>3,
                'usuario_id'=>1,
                'titulo'=>'Nuevo showroom',
                'texto'=>'Les traemos una gran noticia, inaguramos un nuevo showroom en la calle 1234, en el barrio de Palermo. De a poco vamos agrandando la familia ieta. ¡Te esperamos!',
                'sinopsis'=>'Abrimos nuestra nueva sucursal en Palermo...',
                'imagen'=> 'showroom.jpg',
                'imagen_descripcion'=>'Nuevo showroom en Palermo calle 1234',
                'publico' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'novedad_id'=>4,
                'usuario_id'=>1,
                'titulo'=>'Nueva colección',
                'texto'=>'Buenas novedades, ya está disponible la nueva colección Summer 23, de la marca ieta. Una colección de verano única, con todos los detalles para hacer de tu compra una increíble experiencia.',
                'sinopsis'=>'Colección Summer Ss 23 disponible...',
                'imagen'=> 'summer.jpg',
                'imagen_descripcion'=>'Nuevo showroom en Palermo calle 1234',
                'publico' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'novedad_id'=>5,
                'usuario_id'=>1,
                'titulo'=>'Sorteo',
                'texto'=>'Les traemos esta novedad, vamos a sortear un producto de la marca ieta. Para participar tenes que seguírnos en nuestras redes sociales, dale lke y compartí la publicación. El sorteo se realizará en vivo a través de instagram el día 24/11. ¡Te esperamos!',
                'sinopsis'=>'Seguínos en nuestras redes sociales, dale like y compartí la publicación...',
                'imagen'=> 'sorteo.jpg',
                'imagen_descripcion'=>'Sorteo de producto de la marca ieta en instagram',
                'publico' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            
            [
                'novedad_id'=>6,
                'usuario_id'=>1,
                'titulo'=>'Combinar prendas',
                'texto'=>'¿Te cuesta elegir como combinar tus prendas ieta? No te preocupes, dentro de poco vamos a hacer un vivo en nuestra canal de instagram donde te vamos a mostrar como hacerlo. Permanecé atento/a que falta poco.',
                'sinopsis'=>'Anunciaremos un vivo de instagram para ayudarte a combinar...',
                'imagen'=> 'combinar.jpg',
                'imagen_descripcion'=>'Anuncio de vivo en instagram para combinar prendas',
                'publico' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ]
          
    ]);
        }    
}