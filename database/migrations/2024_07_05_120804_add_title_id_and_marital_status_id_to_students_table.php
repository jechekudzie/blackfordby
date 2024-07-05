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
        Schema::table('students', function (Blueprint $table) {
            $table->unsignedBigInteger('title_id')->nullable();
            $table->unsignedBigInteger('marital_status_id')->nullable();
            $table->foreign('title_id')
                ->references('id')
                ->on('titles');
            $table->foreign('marital_status_id')
                ->references('id')
                ->on('marital_statuses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            //
        });
    }
};
