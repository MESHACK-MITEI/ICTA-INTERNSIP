<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Applicant;

class ApplicantSeeder extends Seeder
{
    public function run(): void
    {
        // Generate 50 dummy applicants
        Applicant::factory()->count(50)->create();
    }
}
