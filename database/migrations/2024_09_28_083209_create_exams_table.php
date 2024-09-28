<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->foreignId('academic_year_id')->constrained('academic_years')->onDelete('cascade'); // One-to-Many relation
            $table->foreignId('program_id')->constrained('programs')->onDelete('cascade'); // One-to-Many relation
            $table->date('date');
            $table->string('duration');
            $table->integer('status');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exams');
    }
};
