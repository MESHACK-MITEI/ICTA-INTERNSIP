<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    protected $fillable = ['name', 'department_head', 'description'];

    public function definition()
    {
        return [
            'name' => 'ICT Department',
            'department_head' => $this->faker->name,
            'description' => $this->faker->text,
            'is_active' => true,
            'created_by' => 'System',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
