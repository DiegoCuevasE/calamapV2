<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaOtorga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('otorgas', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de servicio
            $table->unsignedInteger('servicio_id');
            $table->foreign('servicio_id', 'fk_otorgas_servicios')->references('id')->on('servicios')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de mype
            $table->unsignedInteger('mype_id');
            $table->foreign('mype_id', 'fk_otorgas_mypes')->references('id')->on('mypes')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('otorgas');
    }
}
