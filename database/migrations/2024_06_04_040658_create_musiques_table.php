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
        Schema::create('musiques', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nom');
            $table->string('image');
            $table->integer('note');
            $table->string('temps');
            $table->bigInteger('id_genre_musique')->unsigned();
            $table->timestamps();
        });

        Schema::table('musiques', function (Blueprint $table) {
            $table->foreign('id_genre_musique')->references('id')->on('genre_musiques');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musiques');
    }
};
