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
        Schema::table('next_of_kins', function (Blueprint $table) {
//            $table->unsignedBigInteger('student_id')->after('id');
            $table->unsignedBigInteger('student_id')->after('id');
            // Adding the foreign key constraint with cascade on delete
            $table->foreign('student_id')
                ->references('id')
                ->on('students')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('next_of_kins', function (Blueprint $table) {
            //
        });
    }
};
