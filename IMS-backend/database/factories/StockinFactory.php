<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\Supplier;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Stockin>
 */
class StockinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::query()->inRandomOrder()->value('id')
                ?? User::factory()->create()->id,

            'product_id' => Product::query()->inRandomOrder()->value('id')
                ?? Product::factory()->create()->id,

            'supplier_id' => Supplier::query()->inRandomOrder()->value('id')
                ?? Supplier::factory()->create()->id,

            'quantity' => $this->faker->randomFloat(2, 1, 500), // 1–500 units
            'reason' => $this->faker->sentence(10),
        ];
    }
}
