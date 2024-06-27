<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kiderClass>
 */
class KiderClassFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'className' => fake()->name(),
            'price' => fake()->randomFloat(2, 10, 100),
            'age' => fake()->numberBetween(3, 5),
            'time' => fake()->time(),
            'capacity' => fake()->numberBetween(20, 25),
            'active' => fake()->boolean(),
            'image' => fake()->imageUrl(),
            'teacher_id' => fake()->numberBetween(1, 3),
        ];
    }
}
