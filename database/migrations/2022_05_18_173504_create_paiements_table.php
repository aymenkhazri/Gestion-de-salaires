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
            
            $table->double('salaire_brut');
            $table->double('retenue_cnss')->nullable();
            $table->double('salaire_imposable')->nullable();
            $table->double('contribution_sociale')->nullable();
            $table->double('retenue_la_source')->nullable();
            $table->double('net_a_apayer')->nullable();
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
        Schema::dropIfExists('paiements');
    }
}
