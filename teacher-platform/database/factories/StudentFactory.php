<?php

namespace Database\Factories;

use App\Models\ClassRoom;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $classrooms = ClassRoom::pluck('id');
        return [
            'first_name' => fake()->name(1),
            'last_name' => fake()->name(1),
            'classroom_id' => fake()->randomElement($classrooms),
            'login' => fake()->userName(),
            'password' => fake()->password(6, 12),
        ];
    }
}
