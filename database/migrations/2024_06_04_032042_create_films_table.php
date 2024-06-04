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
        Schema::create('films', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nom');
            $table->string('image');
            $table->integer('note');
            $table->string('temps');
            $table->string('trailer');
            $table->text('description');
            $table->bigInteger('id_realisateur')->unsigned();
            $table->timestamps();
        });

        Schema::table('films', function (Blueprint $table) {
            $table->foreign('id_realisateur')->references('id')->on('realisateurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
