<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\subject>
 */
class subjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "SubName" => "PHP",
            "SubCode" => 124,
            "SubDescription" => "Laravel",
            "teacher_id" => 3
        ];
    }
}