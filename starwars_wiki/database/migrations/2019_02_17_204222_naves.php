<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Naves extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('modelo');
            $table->string('clase');
            $table->string('manofactura');
            $table->string('costo_c');
            $table->string('tripulacion');
            $table->string('pasajeros');
            $table->string('velocidad_maxima');
            $table->string('ranking_h');
            $table->string('mglt');
            $table->string('capacidad_carga');
            $table->string('consumibles');
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
        //
    }
}
