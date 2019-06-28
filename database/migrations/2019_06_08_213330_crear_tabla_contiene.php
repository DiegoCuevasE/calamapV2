<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaContiene extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contienes', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de locomocion
            $table->unsignedInteger('locomocion_id');
            $table->foreign('locomocion_id', 'fk_contienes_locomocions')->references('id')->on('locomociones')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de sitio turistico
            $table->unsignedInteger('turistico_id');
            $table->foreign('turistico_id', 'fk_contienes_sitioturisticos')->references('id')->on('sitioturisticos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('contienes');
    }
}
