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
        Schema::create('characters_quests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_quest');
            $table->unsignedBigInteger('id_character');
            $table->timestamps();

            $table->foreign('id_quest')->references('id')->on('quests');
            $table->foreign('id_character')->references('id')->on('characters');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters_quests');
    }
};
