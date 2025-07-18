<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompensationType;

class CompensationTypeSeeder extends Seeder
{
    public function run(): void
    {
        CompensationType::factory()->count(4)->create();
    }
}
