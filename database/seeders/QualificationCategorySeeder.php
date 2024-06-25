<?php

namespace Database\Seeders;

use App\Models\QualificationCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QualificationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $qualificationCategories = collect([
            ['name' => 'Local'],
            ['name' => 'Foreign'],
        ]);

        $qualificationCategories->each(function($qualificationCategory) {
            QualificationCategory::insert($qualificationCategory);
        });
    }
}
