<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->string('Passaport');
            $table->string('CodiVol');
            $table->string('Localitzador');
            $table->string('numSeient');
            $table->string('equipatgeMa');
            $table->string('equipatgeCabina');
            $table->string('QuantFact');
            $table->string('tipusAsse');
            $table->string('Preu');
            $table->string('tipusCheck');
            $table->string('dataArribada');
            $table->string('Clase');    
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
        Schema::dropIfExists('reservas');
    }
}
