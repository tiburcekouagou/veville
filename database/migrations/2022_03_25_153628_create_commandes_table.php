<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id('commandes_id');
            $table->foreignId('membres_id')->references('membres_id')->on('membres');
            $table->foreignId('vehicules_id')->references('vehicules_id')->on('vehicules');
            $table->foreignId('agences_id')->references('agences_id')->on('agences');
            $table->dateTime('date_heure_depart');
            $table->dateTime('date_heure_fin');
            $table->integer('prix_total');
            $table->dateTime('date_enregistrement');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('commandes');
    }
};
