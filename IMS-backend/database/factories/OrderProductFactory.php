<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderProduct>
 */
class OrderProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Ensure role_id and warehouse_id exist
        $order = Order::inRandomOrder()->first();
        $product = Product::inRandomOrder()->first();

        return [
            'order_id' => $order ? $order->id : Order::factory(),
            'product_id' => $product ? $product->id : Product::factory(),
            'quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}
