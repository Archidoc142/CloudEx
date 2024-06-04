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
        Schema::create('saison_animes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->integer('nb_episode');
            $table->string('image');
            $table->text('description');
            $table->bigInteger('id_anime')->unsigned();
            $table->timestamps();
        });

        Schema::table('saison_animes', function (Blueprint $table) {
            $table->foreign('id_anime')->references('id')->on('animes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saison_animes');
    }
};
