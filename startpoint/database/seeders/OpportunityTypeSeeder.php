<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\OpportunityType;

class OpportunityTypeSeeder extends Seeder
{
    public function run(): void
    {
        OpportunityType::factory()->count(10)->create();
    }
}
