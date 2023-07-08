<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'first_name' => fake()->sentence(8),
            'status' => fake()->randomElement(['not started', 'in progress', 'done']),
            'user_id' => fake()->randomElement(User::pluck('_id')),
        ];
    }
}
