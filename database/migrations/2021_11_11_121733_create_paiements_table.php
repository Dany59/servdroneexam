<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaiementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nom_client');
            $table->string('prenom_client');
            $table->string('adresse_client');
            $table->integer('code_postal');
            $table->string('ville');
            $table->integer('appartement')->nullable();
            $table->string('lieu_dit')->nullable();
            $table->string('numero_cb');
            $table->string('nom_cb');
            $table->integer('cryptogramme');
            $table->string('date_expiration');
            $table->boolean('politique');
            $table->boolean('cgu_cgv');





        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paiements');
    }
}
