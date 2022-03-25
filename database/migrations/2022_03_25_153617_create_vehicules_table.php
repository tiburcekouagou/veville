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
        Schema::create('vehicules', function (Blueprint $table) {
            $table->id('vehicules_id');
            $table->foreignId('agences_id')->references('agences_id')->on('agences');
            $table->string('titre', 200);
            $table->string('marque', 50);
            $table->string('modele', 50);
            $table->longText('description');
            $table->string('photo', 200);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('vehicules');
    }
};
