<?php

namespace Database\Factories;

use App\Models\OpportunityType;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityTypeFactory extends Factory
{
    protected $model = OpportunityType::class;

    public function definition(): array
    {
        return [
            'type' => $this->faker->unique()->jobTitle,
            'description' => $this->faker->paragraph,
            'is_active' => true,
            'created_by' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
