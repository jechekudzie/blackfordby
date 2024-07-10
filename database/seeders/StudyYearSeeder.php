<?php

namespace Database\Seeders;

use App\Models\StudyYear;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudyYearSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $studyYears = collect([
            ['year' => 'GAD24 (2024 - 2025)'],
        ]);

        $studyYears->each(function($year) {
            StudyYear::insert($year);
        });
    }
}


