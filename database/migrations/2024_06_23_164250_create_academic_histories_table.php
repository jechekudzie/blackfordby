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
        Schema::create('academic_histories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->unsigned();
            $table->string('institution_name');
            $table->foreignId('qualification_level_id')->unsigned();
            $table->year('start_date');
            $table->year('completion_date')->nullable();
            $table->string('certificate')->nullable();
            $table->string('transcript')->nullable();
            $table->foreignId('qualification_category_id')->unsigned();
            $table->decimal('gpa', 3, 2)->nullable();
            $table->string('special_awards')->nullable();
            $table->foreignId('termination_reason_id')->unsigned()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('academic_histories');
    }
};
