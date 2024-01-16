<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Teacher>
 */
class TeacherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Name' => 'BaNyar',
            'Email' => 'joe@gmail.com',
            'Password' => '12345',
            'Phone' => '0987654334',
            'Gender' => 'Male',
            'DOB' => Carbon::create('2003','16','10'),
            'CurrentAddress' => 'Yangon',
            'PermentAddress' => 'Dala',
            'Photo' => 'img'
        ];
    }
}
