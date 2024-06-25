<?php

namespace Database\Seeders;

use App\Models\ProficiencyLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProficiencyLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proficiencyLevels = collect([
            ['name' => 'Beginner'],
            ['name' => 'Intermediate'],
            ['name' => 'Advanced'],
            ['name' => 'Proficient'],
        ]);

        $proficiencyLevels->each(function($proficiencyLevel) {
            ProficiencyLevel::insert($proficiencyLevel);
        });
    }
}
