<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenSitioTuristicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_sitio_turisticos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sitio_turistico_id');
            $table->foreign('sitio_turistico_id')->references('id')->on('sitio_turisticos')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('imagen_sitio_turisticos');
    }
}
