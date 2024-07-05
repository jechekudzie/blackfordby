<?php

namespace Database\Seeders;

use App\Models\MaritalStatus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaritalStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $statuses = collect([
            ['name' => 'Single'],
            ['name' => 'Married'],
        ]);

        $statuses->each(function($status) {
            MaritalStatus::insert($status);
        });
    }
}
