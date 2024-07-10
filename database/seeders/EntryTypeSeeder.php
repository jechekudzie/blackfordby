<?php

namespace Database\Seeders;

use App\Models\EntryType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EntryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $entryTypes = collect([
            ['name' => 'Normal'],
            ['name' => 'Special'],
            ['name' => 'Mature'],
            ['name' => 'Repeat'],
        ]);
        $entryTypes->each(function($entry) {
            EntryType::insert($entry);
        });
    }
}
