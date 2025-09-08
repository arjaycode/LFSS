<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LostItem>
 */
class LostItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1, // or User::factory()
            'category_id' => 1, // or Category::factory()
            'item_name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'color' => $this->faker->safeColorName(),
            'brand' => $this->faker->company(),
            'date_lost' => $this->faker->date(),
            'is_urgent' => $this->faker->boolean(),
            'is_valuable' => $this->faker->boolean(),
            'photos' => null,
            'status' => 'active',
        ];
    }
}
