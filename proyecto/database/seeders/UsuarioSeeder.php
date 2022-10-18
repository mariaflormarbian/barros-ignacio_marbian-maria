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
                'email'=>'ignacio.barros@davinci.edu.ar',
                'password'=> \Hash::make('alumno1'),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

            [
                'usuario_id'=>2,
                'email'=>'maria.marbian@davinci.edu.ar',
                'password'=> \Hash::make('alumno2'),
                'created_at'=>now(),
                'updated_at'=>now(),
            ],

        ]);

    }
}
