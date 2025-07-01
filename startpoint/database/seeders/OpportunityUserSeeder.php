<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OpportunityUser;
use App\Models\Applicant;
use App\Models\Opportunity;

class OpportunityUserSeeder extends Seeder
{
    public function run(): void
    {
        $applicants = Applicant::all();
        $opportunities = Opportunity::all();

        // Avoid running if no applicants or opportunities exist
        if ($applicants->isEmpty() || $opportunities->isEmpty()) return;

        foreach (range(1, 20) as $i) {
            OpportunityUser::create([
                'user_id' => $applicants->random()->id,
                'opportunity_id' => $opportunities->random()->id,
                'is_active' => true,
            ]);
        }
    }
}
