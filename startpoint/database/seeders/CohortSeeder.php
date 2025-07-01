<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cohort;

class CohortSeeder extends Seeder
{
    public function run(): void
    {
        Cohort::factory()->count(5)->create();
    }
}
