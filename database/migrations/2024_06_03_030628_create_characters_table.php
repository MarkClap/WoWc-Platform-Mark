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
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('experience')->default(0);
            $table->integer('gold')->default(0);
            //test json
            $table->text('appearance')->default('{"Appearance":{"Hair":"#350077","Eyes":"#000000","Skin":"#FFDAB9","Shirt":"#FF0000","Pants":"#0000FF","Shoes":"#000000"}}');
            $table->enum('gender',['M','F']);
            $table->enum('time',['day','night'])->default('day');
            $table->string('Ambience')->default('Ambience1');
            $table->unsignedBigInteger('id_class');
            $table->unsignedBigInteger('id_group')->nullable();
            $table->unsignedBigInteger('id_inscription');
            $table->timestamps();
            $table->foreign('id_class')->references('id')->on('classes');
            $table->foreign('id_group')->references('id')->on('groups');
            $table->foreign('id_inscription')->references('id')->on('inscriptions');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
};
