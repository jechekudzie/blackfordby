<?php

namespace Database\Seeders;

use App\Models\Sponsor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sponsors = collect([
            ['sponsor' => 'Parent, Guardian'],
            ['sponsor' => 'Employer'],
            ['sponsor' => 'Self Sponsored'],
            ['sponsor' => 'Bursary, Grant & Others'],
        ]);

        $sponsors->each(function($sponsor) {
            Sponsor::insert($sponsor);
        });
    }
}




