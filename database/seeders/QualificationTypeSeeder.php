<?php

namespace Database\Seeders;

use App\Models\QualificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationTypes = collect([
            ['name' => 'Ordinary Level'],
            ['name' => 'Advanced Level'],
            ['name' => 'National Certificate'],
            ['name' => 'National Diploma'],
            ['name' => "Bachelor's Degree"],
            ['name' => "Master's Degree"],
        ]);

        $qualificationTypes->each(function($qualificationType) {
            QualificationType::insert($qualificationType);
        });
    }
}
