<?php

namespace Database\Factories;

use App\Models\Title;
use Illuminate\Database\Eloquent\Factories\Factory;

class TitleFactory extends Factory
{
    protected $model = Title::class;

    public function definition()
    {
        return [
            'name' => $this->faker->jobTitle,
            'description' => $this->faker->paragraph,
            'is_active' => $this->faker->boolean,
            'created_by' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
