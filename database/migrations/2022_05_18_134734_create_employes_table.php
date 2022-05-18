<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employes', function (Blueprint $table) {
            $table->id();
            $table->string('avatar')->default('default.jpg');
            $table->string('nom');
            $table->string('prenom');
            $table->string('email')->unique();
            $table->enum('sexe', array('Homme', 'Femme'));
            $table->string('telephone');
            $table->string('adresse');
            $table->string('date_naissance');
            $table->string('cin');
            $table->string('cnss');
         
            $table->string('type_contrat_id');

          
            $table->enum('statu_matrimoniel', array('célibataire', 'mariés', 'divorcée'));
            $table->enum('enfants', array('0', '1', '2', '3', '4 et plus'));
            
           
            

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
        Schema::dropIfExists('employes');
    }
}
