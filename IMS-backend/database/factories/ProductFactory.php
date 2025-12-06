<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
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
        // Ensure role_id and warehouse_id exist
        $category = Category::inRandomOrder()->first();
        $user = User::inRandomOrder()->first();

        return [
            'cat_id' => $category ? $category->id : Category::factory(),
            'user_id' => $user ? $user->id : User::factory(),
            'name' => $this->faker->name(),
            'unit' => $this->faker->word(),
            'stock_quantity' => $this->faker->numberBetween(1, 100),
            'description' => $this->faker->text()
        ];
    }
}
