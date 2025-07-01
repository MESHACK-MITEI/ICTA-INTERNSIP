<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompensationTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type' => 'Unpaid',
            'description' => $this->faker->text,
            'is_active' => true,
            'created_by' => 'System',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
