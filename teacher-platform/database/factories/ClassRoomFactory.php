<?php

namespace Database\Factories;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ClassRoom>
 */
class ClassRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $teachers = Teacher::pluck('id');
        return [
            'classroom_name' => fake()->company(1),
            'classroom_year' => fake()->randomElement(['first year', 'second year', 'third year', 'fourth year', 'fifth year', 'sixth year']),
            'teacher_id' => fake()->randomElement($teachers),
        ];
    }
}
