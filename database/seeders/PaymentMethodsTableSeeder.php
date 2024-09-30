<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentMethodsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('payment_methods')->insert([
            [
                'name' => 'Mercado Pago',
                'description' => 'Plataforma de pago en línea popular en América Latina que permite pagar con tarjeta de crédito, débito y otras opciones.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tarjeta de Débito',
                'description' => 'Método de pago utilizando una tarjeta vinculada directamente a la cuenta bancaria del usuario.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tarjeta de Crédito',
                'description' => 'Método de pago utilizando una tarjeta de crédito, que permite pagar a crédito y realizar pagos a plazos.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

