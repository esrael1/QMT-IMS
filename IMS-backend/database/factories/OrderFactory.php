<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Warehouse;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Ensure role_id and warehouse_id exist
        $user = User::inRandomOrder()->first();
        $warehouse = Warehouse::inRandomOrder()->first();

        return [
            'customer_id' => $user ? $user->id : User::factory(),
            'warehouse_id' => $warehouse ? $warehouse->id : Warehouse::factory(),
            'status' => $this->faker->randomElement(['pending', 'verified', 'stockedout', 'respond']),
            'note' => $this->faker->text()
        ];
    }
}
