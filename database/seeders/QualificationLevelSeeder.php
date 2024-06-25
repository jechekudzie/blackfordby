<?php

namespace Database\Seeders;

use App\Models\QualificationLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualificationLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationLevels = collect([
            ['name' => 'Ordinary Level'],
            ['name' => 'Advanced Level'],
            ['name' => 'National Certificate'],
            ['name' => 'National Diploma'],
            ['name' => "Bachelor's Degree"],
            ['name' => "Master's Degree"],
        ]);

        $qualificationLevels->each(function($qualificationLevel) {
            QualificationLevel::insert($qualificationLevel);
        });
    }
}
