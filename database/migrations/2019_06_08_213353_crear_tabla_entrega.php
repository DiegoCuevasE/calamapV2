<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEntrega extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entregas', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de sitio turistico
            $table->unsignedInteger('turistico_id');
            $table->foreign('turistico_id', 'fk_entregas_sitioturisticos')->references('id')->on('sitioturisticos')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de servicio
            $table->unsignedInteger('servicio_id');
            $table->foreign('servicio_id', 'fk_entregas_servicios')->references('id')->on('servicios')->onDelete('cascade')->onUpdate('cascade');
            //
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
        Schema::dropIfExists('entregas');
    }
}
