<?php

namespace Database\Factories;

use App\Models\Opportunity;
use Illuminate\Database\Eloquent\Factories\Factory;

class OpportunityFactory extends Factory
{
    protected $model = Opportunity::class;

    public function definition()
{
    return [
        'title' => 'ICT Internship Program',
        'department' => 'ICT Department',
        'opportunity_type' => 'Internship',
        'opportunity_description' => 'A 3-month internship for university students.',
        'core_competencies' => 'PHP, Laravel, MySQL',
        'compensation_type' => 'Unpaid',
        'compensation_currency' => 'KES',
        'compensation_amount' => 0.00,
        'expiry_date' => now()->addDays(30),
        'is_active' => true,
        'created_by' => 'Admin',
        'created_at' => now(),
        'updated_at' => now(),
    ];
}
}
