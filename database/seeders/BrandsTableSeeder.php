<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandsTableSeeder extends Seeder
{
    public function run()

    {
        DB::table('brand')->insert([
            [
                'name' => 'CeraVe',
                'description' => 'CeraVe ofrece una gama de productos para el cuidado de la piel desarrollados por dermatólogos, diseñados para restaurar y proteger la barrera cutánea.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Paula’s Choice',
                'description' => 'Paula’s Choice proporciona soluciones de cuidado de la piel basadas en la ciencia, con un enfoque en fórmulas efectivas y no irritantes.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'SkinCeuticals',
                'description' => 'SkinCeuticals ofrece productos avanzados para el cuidado de la piel respaldados por la ciencia, enfocados en la prevención, protección y corrección.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Neutrogena',
                'description' => 'Neutrogena proporciona productos para el cuidado de la piel recomendados por dermatólogos, efectivos para varios tipos y preocupaciones de la piel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'La Roche-Posay',
                'description' => 'La Roche-Posay es conocida por sus productos amigables con la piel sensible, formulados con agua termal.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'The Ordinary',
                'description' => 'The Ordinary ofrece productos de cuidado de la piel asequibles y de alta calidad con ingredientes activos sencillos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'GlamGlow',
                'description' => 'GlamGlow proporciona tratamientos innovadores y mascarillas para el cuidado de la piel, diseñados para resultados instantáneos y una piel radiante.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Kiehl’s',
                'description' => 'Kiehl’s combina ingredientes naturales con tecnología avanzada para crear productos efectivos para todo tipo de piel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vichy',
                'description' => 'Vichy utiliza el poder del agua mineral volcánica y otros ingredientes activos para mejorar la salud y la resistencia de la piel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Olay',
                'description' => 'Olay ofrece una amplia gama de productos para el cuidado de la piel con enfoque en el antienvejecimiento y la salud general de la piel para varios tipos de piel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
