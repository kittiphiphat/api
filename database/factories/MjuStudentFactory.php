<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MjuStudent>
 */
class MjuStudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'first_name' => fake('th_TH')->name(),
            'last_name' => fake('th_TH')->lastName(),
            'first_name_en' => fake()->name(),
            'last_name_en' => fake()->lastName(),
            'student_code' => fake()->unique()->regexify('[0-9]{15}'),
            'idcard' => fake()->unique()->regexify('[0-9]{13}'),
            'birthdate' => fake()->dateTimeBetween(),
            'major_id'=> 2,
            'gender' => fake()->randomElement(['M','F']),
            'address' => fake()->address(),
            'phone' => fake()->numerify('###########'),
            'email' => fake()->unique()->email()
        ];
    }
}
