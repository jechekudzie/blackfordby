<?php

namespace Database\Seeders;

use App\Models\Title;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $titles = collect([
           ['name' => 'Mr'],
           ['name' => 'Mrs'],
           ['name' => 'Miss'],
           ['name' => 'Ms'],
           ['name' => 'Dr'],
        ]);

        $titles->each(function($title) {
            Title::insert($title);
        });
    }
}
