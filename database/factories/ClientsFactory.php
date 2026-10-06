<?php

namespace Database\Factories;

use App\Models\Clients;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Clients>
 */
class ClientsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'name' => $this->faker->name(),
           'email' => $this->faker->unique()->safeEmail(),
           'address' => $this->faker->address(),
           'phone' => $this->faker->phoneNumber(),
           'status' => '1',
           'registered_by' => $this->faker->name()
        ];
    }
}
