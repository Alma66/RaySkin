<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert([
            [
                'name' => 'Limpiadores Faciales',
                'description' => 'Productos diseñados para limpiar la piel del rostro eliminando impurezas y maquillaje.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tónicos',
                'description' => 'Productos que ayudan a equilibrar el pH de la piel y prepararla para los siguientes pasos del cuidado.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hidratantes',
                'description' => 'Productos que proporcionan hidratación a la piel, ayudando a mantener su suavidad y elasticidad.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Protectores Solares',
                'description' => 'Productos que protegen la piel de los daños causados por la exposición al sol.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Exfoliantes',
                'description' => 'Productos que eliminan las células muertas de la piel para mejorar su textura y apariencia.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mascarillas',
                'description' => 'Productos que se aplican en el rostro para tratar diversas necesidades de la piel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eyes Creams',
                'description' => 'Cremas específicamente formuladas para el área delicada alrededor de los ojos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sérums',
                'description' => 'Productos concentrados con ingredientes activos que tratan preocupaciones específicas de la piel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cremas',
                'description' => 'Productos que proporcionan hidratación y nutrientes adicionales a la piel, a menudo con beneficios específicos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
