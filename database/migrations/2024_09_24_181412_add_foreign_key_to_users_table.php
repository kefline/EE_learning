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
        Schema::table('users', function (Blueprint $table) {
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate(   'cascade')->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')->onUpdate(   'cascade')->onDelete('cascade');
            $table->foreign('program_id')->references('id')->on('programs')->onUpdate(   'cascade')->onDelete('cascade');
            $table->foreign('specialization_id')->references('id')->on('specializations')->onUpdate(   'cascade')->onDelete('cascade');
            $table->foreign('academic_year_id')->references('id')->on('academic_years')->onUpdate(   'cascade')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['department_id, level_id, program_id, specialization_id, academic_year_id']);
        });
    }
};
