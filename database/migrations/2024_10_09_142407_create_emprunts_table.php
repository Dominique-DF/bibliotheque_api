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
        Schema::create('emprunts', function (Blueprint $table) {
            $table->id();

            $table->integer('livre_id')->unsigned();
            $table->foreign('livre_id')->references('id')->on('livres');
            $table->integer('emprunteur_id')->unsigned();
            $table->foreign('emprunteur_id')->references('id')->on('emprunteurs');
            $table->date('date_emprunt');
            $table->date('date_retour')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('emprunts');
    }
};
