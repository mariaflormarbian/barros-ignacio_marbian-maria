<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('usuarios')->insert([
            [
                'usuario_id'=>1,
                'nombre' => 'Ignacio',
                'email'=>'ignacio.barros@davinci.edu.ar',
                'password'=> \Hash::make('alumno1'),
                'roles' => 1,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'usuario_id'=>2,
                'nombre' => 'Florencia',
                'email'=>'maria.marbian@davinci.edu.ar',
                'password'=> \Hash::make('alumno2'),
                'roles' => 2,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'usuario_id'=>3,
                'nombre' => 'Rocket',
                'email'=>'rocket.barros@davinci.edu.ar',
                'password'=> \Hash::make('alumno3'),
                'roles' => 2,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
            [
                'usuario_id'=>4,
                'nombre' => 'Pacho',
                'email'=>'pacho.marbian@davinci.edu.ar',
                'password'=> \Hash::make('alumno4'),
                'roles' => 2,
                'created_at'=>now(),
                'updated_at'=>now(),
            ],
        ]);
    }
}
