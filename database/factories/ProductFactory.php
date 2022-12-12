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
    public function definition()
    {
        $product_name = fake()->numerify('Product-####');
        return [
            "name" => $product_name,
            "category_id" => fake()->randomDigitNotNull(),
            "slug" => $product_name, 
            "description" => fake()->sentence(20),
            "image" => fake()->imageUrl(640, 480, 'animals', true),
            "price" => fake()->numberBetween(200000, 10000000),
            "weight" => fake()->numberBetween(3, 12),
        ];
    }
}
