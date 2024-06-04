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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->id();
            $table->text('texte');
            $table->string('temps');
            $table->bigInteger('id_utilisateur')->unsigned();
            $table->timestamps();
        });

        Schema::table('commentaires', function (Blueprint $table) {
            $table->foreign('id_utilisateur')->references('id')->on('utilisateurs');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
