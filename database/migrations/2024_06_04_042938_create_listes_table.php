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
        Schema::create('listes', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->string('nom');
            $table->bigInteger('id_utilisateur')->unsigned();
            $table->bigInteger('id_type')->unsigned();
            $table->timestamps();
        });

        Schema::table('listes', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs');
            $table->foreign('id_type')->references('id')->on('types');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('listes');
    }
};
