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
        Schema::create('quizzes_history', function (Blueprint $table) {
            $table->id();
            $table->integer('quiz')->default(0);
            $table->string('score');
            $table->unsignedBigInteger('id_character');
            $table->timestamps();

            $table->foreign('id_character')->references('id')->on('characters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quizzes_history');
    }
};
