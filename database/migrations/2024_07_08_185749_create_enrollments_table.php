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
        Schema::create('enrollments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('enrollment_year_id');
            $table->unsignedBigInteger('entry_type_id');
            $table->unsignedBigInteger('enrollment_type_id');
            $table->unsignedBigInteger('sponsor_id')->nullable();
            $table->unsignedBigInteger('enrollment_status_id')->default(1);
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('enrollment_year_id')->references('id')->on('enrollment_years');
            $table->foreign('entry_type_id')->references('id')->on('entry_types');
            $table->foreign('enrollment_type_id')->references('id')->on('enrollment_types');
            $table->foreign('sponsor_id')->references('id')->on('sponsors');
            $table->foreign('enrollment_status_id')->references('id')->on('enrollment_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enrollments');
    }
};
