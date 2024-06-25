<?php

namespace Database\Seeders;

use App\Models\TerminationReason;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TerminationReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $terminationReasons = collect([
            ['description' => 'Graduated'],
            ['description' => 'Transferred'],
            ['description' => 'Withdrew'],
            ['description' => 'Financial'],
        ]);

        $terminationReasons->each(function($terminationReason) {
            TerminationReason::insert($terminationReason);
        });
    }
}
