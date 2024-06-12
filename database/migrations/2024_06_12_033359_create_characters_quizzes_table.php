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
        Schema::create('characters_quizzes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_character');
            $table->unsignedBigInteger('id_quiz');
            $table->timestamps();

            $table->foreign('id_character')->references('id')->on('characters');
            $table->foreign('id_quiz')->references('id')->on('quizzes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters_quizzes');
    }
};
