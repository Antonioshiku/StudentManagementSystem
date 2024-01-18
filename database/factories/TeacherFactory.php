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
            'Name' => 'SuPyae',
            'Email' => 'su@gmail.com',
            'Password' => '12345',
            'Phone' => '0987654334',
            'Gender' => 'Female',
            'DOB' => Carbon::create('2003','16','10'),
            'CurrentAddress' => 'Hleden',
            'PermentAddress' => 'Yangon',
            'PhotoName' => '1705565608.png',
            'PhotoPath' => 'C:\Users\User\AppData\Local\Temp\php4E50.tmp',
        ];
    }
}
