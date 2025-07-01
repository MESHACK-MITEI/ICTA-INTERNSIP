<?php

namespace Database\Factories;

use App\Models\OpportunityUser;
use App\Models\Applicant; // or App\Models\User if still using User
use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityUserFactory extends Factory
{
    protected $model = OpportunityUser::class;

    public function definition()
    {
        return [
            'user_id' => Applicant::factory(), // Change to User::factory() if not using Applicant
            'opportunity_id' => Opportunity::factory(),
            'is_active' => $this->faker->boolean,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
