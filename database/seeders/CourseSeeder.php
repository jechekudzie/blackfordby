<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = collect([
            ['name' => 'Diploma in General Agriculture'],
        ]);

        $courses->each(function($course) {
            Course::insert($course);
        });
    }
}
