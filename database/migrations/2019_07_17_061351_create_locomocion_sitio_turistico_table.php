<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocomocionSitioTuristicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locomocion_sitio_turistico', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('locomocion_id');
            $table->foreign('locomocion_id')->references('id')->on('locomocions')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de sitio turistico
            $table->unsignedBigInteger('turistico_id');
            $table->foreign('turistico_id')->references('id')->on('sitio_turisticos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('locomocion_sitio_turistico');
    }
}
