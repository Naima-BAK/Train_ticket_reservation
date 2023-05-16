<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvantPaimentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('avant_paiments', function (Blueprint $table) {
            $table->id();
            $table->string('villeDepart');
            $table->string('villeFin');
            $table->date('DateDepart');           
            $table->integer('numeroTrain');
            $table->string('heureDepart');
            $table->string('heureFin');
            $table->float('prixPropose');
            $table->string('categorie');
            $table->string('infoPlaceVoiture');
            $table->string('nomUser');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('avant_paiments');
    }
}
