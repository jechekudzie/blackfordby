<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('addresses', function (Blueprint $table) {
        // Rename city to city_id and set it as a foreign key
        $table->dropColumn('city');
        $table->foreignId('city_id')->after('address_line2')->unsigned()->constrained('cities');

        // Remove zip_code column
        $table->dropColumn('zip_code');

        // Change state to province_id and set it as a foreign key
        $table->dropColumn('state');
        $table->foreignId('province_id')->after('city_id')->unsigned()->constrained('provinces');

        // Set foreign key constraints
        $table->foreignId('student_id')->change()->unsigned()->constrained('students');
        $table->foreignId('address_type_id')->change()->unsigned()->constrained('address_types');
        $table->foreignId('country_id')->change()->unsigned()->constrained('countries');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('addresses', function (Blueprint $table) {

        });
    }
};
