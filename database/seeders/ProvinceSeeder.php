<?php

namespace Database\Seeders;

use App\Models\Province;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provinces = collect([
            ["name" => "Bulawayo"],
            ["name" => "Harare"],
            ["name" => "Manicaland"],
            ["name" => "Mashonaland Central"],
            ["name" => "Mashonaland East"],
            ["name" => "Mashonaland West"],
            ["name" => "Masvingo"],
            ["name" => "Matebeleland North"],
            ["name" => "Matebeleland South"],
            ["name" => "Midlands"],
        ]);

        $provinces->each(function($province) {
            Province::create([
                'name' => $province['name'],
            ]);
        });
    }
}
