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
        Schema::create('membres', function (Blueprint $table) {
            $table->id('membres_id');
            $table->string('pseudo', 20);
            $table->string('mdp', 60);
            $table->string('nom', 20);
            $table->string('prenom', 20);
            $table->string('email', 50);
            $table->enum('civilite', ['m', 'f']);
            $table->integer('statut');
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
        Schema::dropIfExists('membres');
    }
};
