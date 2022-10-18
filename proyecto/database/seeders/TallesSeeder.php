<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talles')->insert([
            [
                'talle_id' => 1,
                'nombre' => 'S',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'talle_id' => 2,
                'nombre' => 'L',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'talle_id' => 3,
                'nombre' => 'XL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'talle_id' => 4,
                'nombre' => 'XLL',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
