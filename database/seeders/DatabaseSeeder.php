<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(class: GenderSeeder::class);
        $this->call(class: ContactTypeSeeder::class);
        $this->call(class: AddressTypeSeeder::class);
        $this->call(class: CountrySeeder::class);
        $this->call(class: TitleSeeder::class);
        $this->call(class: StudyYearSeeder::class);
        $this->call(class: QualificationTypeSeeder::class);
        $this->call(class: EnrollmentStatusSeeder::class);
        $this->call(class: Course::class);
    }
}
