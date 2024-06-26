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
        Schema::create('teachers_courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_teacher');
            $table->unsignedBigInteger('id_course');
            $table->timestamps();

            $table->foreign('id_teacher')->references('id')->on('teachers')->cascadeOnDelete();
            $table->foreign('id_course')->references('id')->on('courses')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers_courses');
    }
};
