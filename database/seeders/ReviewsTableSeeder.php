<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ReviewsTableSeeder extends Seeder
{
    public function run()
    {
        $reviews = [
            // Review 1
            ['user_id' => 26, 'rating' => 5, 'comment' => 'Excelente producto, lo recomiendo!', 'review_date' => Carbon::now()->subDays(10), 'productos_id' => 1],
            // Review 2
            ['user_id' => 15, 'rating' => 4, 'comment' => 'Muy bueno, aunque podría mejorar.', 'review_date' => Carbon::now()->subDays(8), 'productos_id' => 2],
            // Review 3
            ['user_id' => 9, 'rating' => 3, 'comment' => 'Está bien, pero no es lo que esperaba.', 'review_date' => Carbon::now()->subDays(6), 'productos_id' => 3],
            // Review 4
            ['user_id' => 23, 'rating' => 5, 'comment' => 'Me encanta, definitivamente lo compraré de nuevo.', 'review_date' => Carbon::now()->subDays(4), 'productos_id' => 4],
            // Review 5
            ['user_id' => 8, 'rating' => 2, 'comment' => 'No me funcionó, esperaba más.', 'review_date' => Carbon::now()->subDays(2), 'productos_id' => 5],
            // Review 6
            ['user_id' => 8, 'rating' => 4, 'comment' => 'Buena calidad, pero el precio es un poco alto.', 'review_date' => Carbon::now()->subDays(12), 'productos_id' => 6],
            // Review 7
            ['user_id' => 19, 'rating' => 5, 'comment' => 'Excelente tónico, noté una gran diferencia.', 'review_date' => Carbon::now()->subDays(9), 'productos_id' => 7],
            // Review 8
            ['user_id' => 13, 'rating' => 3, 'comment' => 'Está bien, pero hay mejores opciones.', 'review_date' => Carbon::now()->subDays(7), 'productos_id' => 8],
            // Review 9
            ['user_id' => 18, 'rating' => 4, 'comment' => 'Me gustó mucho, lo recomendaría.', 'review_date' => Carbon::now()->subDays(5), 'productos_id' => 9],
            // Review 10
            ['user_id' => 19, 'rating' => 5, 'comment' => 'Uno de los mejores productos que he probado.', 'review_date' => Carbon::now()->subDays(3), 'productos_id' => 10],
            ['user_id' => 21, 'rating' => 4, 'comment' => 'Buen producto, pero tarda en hacer efecto.', 'review_date' => Carbon::now()->subDays(15), 'productos_id' => 11],
            ['user_id' => 15, 'rating' => 3, 'comment' => 'No es malo, pero esperaba algo más.', 'review_date' => Carbon::now()->subDays(13), 'productos_id' => 12],
            ['user_id' => 15, 'rating' => 4, 'comment' => 'La textura es agradable y se absorbe bien.', 'review_date' => Carbon::now()->subDays(11), 'productos_id' => 13],
            ['user_id' => 24, 'rating' => 5, 'comment' => 'Excelente para mi tipo de piel, lo volvería a comprar.', 'review_date' => Carbon::now()->subDays(9), 'productos_id' => 14],
            ['user_id' => 4, 'rating' => 2, 'comment' => 'No cumplió con lo que prometía.', 'review_date' => Carbon::now()->subDays(7), 'productos_id' => 15],
            ['user_id' => 6, 'rating' => 4, 'comment' => 'Muy buen tónico, pero el envase es pequeño.', 'review_date' => Carbon::now()->subDays(16), 'productos_id' => 16],
            ['user_id' => 20, 'rating' => 5, 'comment' => 'Perfecto para mi rutina diaria, lo recomiendo.', 'review_date' => Carbon::now()->subDays(14), 'productos_id' => 17],
            ['user_id' => 20, 'rating' => 3, 'comment' => 'No está mal, pero hay opciones mejores.', 'review_date' => Carbon::now()->subDays(12), 'productos_id' => 18],
            ['user_id' => 16, 'rating' => 4, 'comment' => 'Buena hidratación, pero el precio es alto.', 'review_date' => Carbon::now()->subDays(10), 'productos_id' => 19],
            ['user_id' => 26, 'rating' => 5, 'comment' => 'Me encanta, lo mejor que he probado.', 'review_date' => Carbon::now()->subDays(8), 'productos_id' => 20],
            ['user_id' => 28, 'rating' => 4, 'comment' => 'Buena relación calidad-precio, me gusta.', 'review_date' => Carbon::now()->subDays(20), 'productos_id' => 21],
            ['user_id' => 23, 'rating' => 5, 'comment' => 'Maravilloso para la piel seca, muy recomendado.', 'review_date' => Carbon::now()->subDays(18), 'productos_id' => 22],
            ['user_id' => 27, 'rating' => 3, 'comment' => 'Aceptable, aunque esperaba un mejor resultado.', 'review_date' => Carbon::now()->subDays(16), 'productos_id' => 23],
            ['user_id' => 8, 'rating' => 4, 'comment' => 'Buen producto, pero el olor podría mejorar.', 'review_date' => Carbon::now()->subDays(14), 'productos_id' => 24],
            ['user_id' => 29, 'rating' => 2, 'comment' => 'No me gustó, no noté ningún cambio.', 'review_date' => Carbon::now()->subDays(12), 'productos_id' => 25],
            ['user_id' => 29, 'rating' => 5, 'comment' => 'Excelente para pieles sensibles, muy eficaz.', 'review_date' => Carbon::now()->subDays(22), 'productos_id' => 26],
            ['user_id' => 11, 'rating' => 3, 'comment' => 'Bueno, pero esperaba más hidratación.', 'review_date' => Carbon::now()->subDays(21), 'productos_id' => 27],
            ['user_id' => 5, 'rating' => 4, 'comment' => 'Me gustó mucho, pero el envase es pequeño.', 'review_date' => Carbon::now()->subDays(19), 'productos_id' => 28],
            ['user_id' => 6, 'rating' => 2, 'comment' => 'No lo recomendaría, no cumplió con mis expectativas.', 'review_date' => Carbon::now()->subDays(17), 'productos_id' => 29],
            ['user_id' => 11, 'rating' => 5, 'comment' => 'Fantástico, me encanta cómo se siente en la piel.', 'review_date' => Carbon::now()->subDays(15), 'productos_id' => 30],
         ];

        DB::table('reviews')->insert($reviews);
    }
}
