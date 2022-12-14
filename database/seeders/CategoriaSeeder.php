<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = [
            [
                "name" => "Dibujo"
            ],
            [
                "name" => "Fotografia"
            ],
            [
                "name" => "Manualidades"
            ],
            [
                "name" => "Pintura"
            ],
            [
                "name" => "Tattoo"
            ],
            [
                "name" => "Otro"
            ]
        ];

        foreach ($categorias as $categoria)
        {
            Categoria::create([
                'name' => $categoria['name']
            ]);
        }
    }
}
