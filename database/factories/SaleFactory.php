<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => \App\Models\User::factory(),
            'total' => $this->faker->randomFloat(2, 10, 1000),
            'sale_date' => $this->faker->date(),
            'payment_method_id' => \App\Models\PaymentMethod::factory(),
        ];
    }
}
