<?php

namespace Database\Seeders;

use App\Models\EnrollmentStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnrollmentStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $enrollmentStatuses = collect([
            ['status' => 'Pending'],
            ['status' => 'Paused'],
            ['status' => 'Rejected'],
            ['status' => 'Approved'],
        ]);

        $enrollmentStatuses->each(function($status) {
            EnrollmentStatus::insert($status);
        });
    }
}
