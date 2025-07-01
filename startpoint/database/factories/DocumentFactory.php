<?php

namespace Database\Factories;

use App\Models\Document;
use App\Models\User; // or Applicant if that's your actual model
use Illuminate\Database\Eloquent\Factories\Factory;

class DocumentFactory extends Factory
{
    protected $model = Document::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // or Applicant::factory() if you renamed the model
            'name' => $this->faker->word . '_document',
            'description' => $this->faker->sentence,
            'file_path' => 'documents/' . $this->faker->uuid . '.pdf',
            'file_name' => $this->faker->word . '.pdf',
            'file_extension' => 'pdf',
            'file_size_in_kilobytes' => $this->faker->randomFloat(2, 10, 500),
            'is_active' => $this->faker->boolean,
            'created_by' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
