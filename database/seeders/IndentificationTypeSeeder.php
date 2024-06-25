<?php

namespace Database\Seeders;

use App\Models\IdentificationType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndentificationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $identificationTypes = collect([
            ['name' => 'National Id'],
            ['name' => 'Passport'],
        ]);

        $identificationTypes->each(function($identificationType) {
            IdentificationType::insert($identificationType);
        });
    }
}
