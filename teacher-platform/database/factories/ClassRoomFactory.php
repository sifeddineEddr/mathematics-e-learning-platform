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
        $years = ['الأول ابتدائي', 'الثاني ابتدائي', 'الثالث ابتدائي', 'الرابع ابتدائي', 'الخامس ابتدائي', 'السادس ابتدائي'];
        $classes = [1, 2, 3, 4, 5, 6, 7, 8, 9];
        $classroomNames = [];
        foreach ($years as $year) {
            foreach ($classes as $class) {
                array_push($classroomNames, "$year - $class");
            }
        }
        
        $teachers = Teacher::pluck('id');
        return [
            'classroom_name' => fake()->randomElement($classroomNames),
            'teacher_id' => fake()->randomElement($teachers),
        ];
    }
}
