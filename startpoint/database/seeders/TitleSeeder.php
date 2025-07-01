<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Title;

class TitleSeeder extends Seeder
{
    public function run(): void
    {
        Title::factory()->count(5)->create();
    }
}
