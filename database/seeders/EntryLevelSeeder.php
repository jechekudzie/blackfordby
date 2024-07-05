<?php

namespace Database\Seeders;

use App\Models\EntryLevel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntryLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $entryLevels = collect([
            ['name' => 'Normal'],
            ['name' => 'Special'],
            ['name' => 'Mature'],
            ['name' => 'Repeat'],
        ]);

        $entryLevels->each(function($level) {
            EntryLevel::insert($level);
        });
    }
}



