<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CohortFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Cohort 2025',
            'code_name' => 'C2025',
            'president' => $this->faker->name,
            'start_date' => '2025-01-01',
            'end_date' => '2025-06-30',
            'is_active' => true,
            'created_by' => 'Admin',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
