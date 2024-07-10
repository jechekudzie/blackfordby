<?php

namespace Database\Seeders;

use App\Models\EnrollmentType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enrollmentTypes = collect([
            ['name' => 'Conventional'],
            ['name' => 'Part-time'],
        ]);
        $enrollmentTypes->each(function($enrollment) {
            EnrollmentType::insert($enrollment);
        });
    }
}
