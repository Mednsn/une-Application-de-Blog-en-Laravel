<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->word(),
            'content' => fake()->paragraph(),
            'image' => fake()->url(),
            'author' => fake()->name(),
            'read_time' => fake()->numberBetween(5,20),
            'category_id' => fake()-> numberBetween(1,10),

        ];
    }
}
