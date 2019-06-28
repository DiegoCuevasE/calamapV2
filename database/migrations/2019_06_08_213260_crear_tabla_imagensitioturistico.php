<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImagensitioturistico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagensitioturisticos', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de sitio turistico
            $table->unsignedInteger('sitioturistico_id');
            $table->foreign('sitioturistico_id')->references('id')->on('sitioturisticos')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('enlace_imagen_turistico', 254);
            $table->string('tipo_imagen_turistico', 15);
            $table->string('thumbnail');        
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
        Schema::dropIfExists('imagensitioturisticos');
    }
}
