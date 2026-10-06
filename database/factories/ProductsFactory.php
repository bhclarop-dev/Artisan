<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'           => fake()->words(3, true),
            'sale_price'     => fake()->randomFloat(2, 10, 500),
            'purchase_price' => fake()->randomFloat(2, 5, 250),
            'description'    => fake()->optional()->paragraph(),
            'stock'          => fake()->numberBetween(0, 100),
            'image'          => fake()->optional()->imageUrl(640, 480, 'products', true),
            'status'         => fake()->boolean(80),
            'registered_by'  => fake()->optional()->name(),
        ];
    }
}
