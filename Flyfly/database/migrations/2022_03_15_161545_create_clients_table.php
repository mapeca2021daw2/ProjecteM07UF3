<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('Passaport')primary();
            $table->string('NomCognoms');
            $table->string('Edat');
            $table->string('Telefon');
            $table->string('Adreça');
            $table->string('Ciutat');
            $table->string('Pais');
            $table->string('Email');
            $table->enum('TipusTargeta',["Debit","Credit"]);
            $table->string('numTargeta');
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
        Schema::dropIfExists('clients');
    }
}
