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
        Schema::create('qualifications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('ordinary_level_institution_id')->nullable();
            $table->unsignedBigInteger('ordinary_level_id')->nullable();
            $table->string('ordinary_level_certificate')->nullable();
            $table->year('ordinary_level_start_year')->nullable();
            $table->year('ordinary_level_end_year')->nullable();
            $table->unsignedBigInteger('advanced_level_institution_id')->nullable();
            $table->unsignedBigInteger('advanced_level_id')->nullable();
            $table->string('advanced_level_certificate')->nullable();
            $table->year('advanced_level_start_year')->nullable();
            $table->year('advanced_level_end_year')->nullable();
            $table->unsignedBigInteger('college_level_institution_id')->nullable();
            $table->unsignedBigInteger('college_level_id')->nullable();
            $table->string('college_level_certificate')->nullable();
            $table->year('college_level_start_year')->nullable();
            $table->year('college_level_end_year')->nullable();
            $table->timestamps();

            // Foreign key constraints
            $table->foreign('student_id')->references('id')->on('students');
            $table->foreign('ordinary_level_institution_id')->references('id')->on('institutions');
            $table->foreign('ordinary_level_id')->references('id')->on('qualification_types');
            $table->foreign('advanced_level_institution_id')->references('id')->on('institutions');
            $table->foreign('advanced_level_id')->references('id')->on('qualification_types');
            $table->foreign('college_level_institution_id')->references('id')->on('institutions');
            $table->foreign('college_level_id')->references('id')->on('qualification_types');

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qualifications');
    }
};
