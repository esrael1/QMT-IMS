<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // user_id is optional; 50% chance of having a linked user
            'user_id' => $this->faker->boolean(50)
                ? (User::inRandomOrder()->value('id') ?? User::factory()->create()->id) : null,
            'name' => $this->faker->company(),
            'contact' => $this->faker->unique()->phoneNumber(),
            'address' => $this->faker->address(),
        ];
    }
}
