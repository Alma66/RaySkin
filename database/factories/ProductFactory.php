<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 5, 50),
            'stock' => $this->faker->numberBetween(1, 100),
            'brand_id' => \App\Models\Brand::factory(),
            'category_id' => \App\Models\Category::factory(),
            'created_at' => now(),
            'updated_at' => now(),
         ];
    }
}
