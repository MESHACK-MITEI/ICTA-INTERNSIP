<?php

namespace Database\Factories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApplicantFactory extends Factory
{
    protected $model = Applicant::class;

    public function definition()
    {
        return [
            'title' => $this->faker->title(),
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'phone_number' => $this->faker->phoneNumber,
            'cohort' => 'COHORT-' . $this->faker->randomNumber(3),
            'email_address' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password'), // or use Hash::make()
            'is_active' => $this->faker->boolean,
            'created_by' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
