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
        Schema::create('quests_history', function (Blueprint $table) {
            $table->id();
            $table->integer('sum_experience');
            $table->integer('sum_gold');
            $table->unsignedBigInteger('id_course');
            $table->unsignedBigInteger('id_character_quest');
            $table->timestamps();

            $table->foreign('id_course')->references('id')->on('courses');
            $table->foreign('id_character_quest')->references('id')->on('characters_quests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quests_history');
    }
};
