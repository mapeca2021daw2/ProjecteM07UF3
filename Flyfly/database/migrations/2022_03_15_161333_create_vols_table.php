<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vols', function (Blueprint $table) {
            $table->id();
            $table->string('codiVol', 6)-> primary();
            $table->string('codiModel');
            $table->string('CiutatOrigen'); 
            $table->string('CiutatDestinacio');
            $table->string('TerminalOrigen');
            $table->string('TerminalDestinacio');
            $table->string('dataSortida');
            $table->string('dataArribada');
            $table->string('horaSortida');
            $table->string('horaArribada');
            $table->enum('Classe',["Turista","Business", "Primera"]);  
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
        Schema::dropIfExists('vols');
    }
}
