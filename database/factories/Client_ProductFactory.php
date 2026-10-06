<?php

namespace Database\Factories;

use App\Models\Client_Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Client_Product>
 */
class Client_ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'client_id'     => Clients::inRandomOrder()->first()?->id ?? Clients::factory(),
            'product_id'    => Products::inRandomOrder()->first()?->id ?? Products::factory(),
            'quantity'      => $quantity,
            'unit_price'    => $unitPrice,
            'total'         => $quantity * $unitPrice,
            'registered_by' => fake()->optional()->name(),
        ];
    }
}
