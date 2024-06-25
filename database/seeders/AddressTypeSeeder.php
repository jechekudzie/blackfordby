<?php

namespace Database\Seeders;

use App\Models\AddressType;
use App\Models\Gender;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addressTypes = collect([
            ['name' => 'Phonenumber'],
            ['name' => 'Email'],
        ]);

        $addressTypes->each(function($addressType) {
            AddressType::create([
                'name' => $addressType['name'],
            ]);
        });
    }
}
