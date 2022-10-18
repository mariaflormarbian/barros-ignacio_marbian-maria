<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriasSeeder::class);
        $this->call(TallesSeeder::class);
        $this->call(ProductosSeeder::class);
        $this->call(UsuarioSeeder::class);

=======
        $this->call(ProductosTienenTallesSeeder::class);
>>>>>>> 5719339d6e1d31c82d70c598903698269f9597d3
    }
}
