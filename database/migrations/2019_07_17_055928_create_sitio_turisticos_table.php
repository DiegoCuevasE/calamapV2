<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSitioTuristicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitio_turisticos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->boolean('entrada_sitio');
            $table->string('precio_sitio',50)->nullable();
            $table->string('horario_turistico', 30);
            $table->string('nombre_turistico', 50)->unique();
            $table->string('direccion_turistico', 254);
            $table->string('descripcion_turistico', 1024);
            $table->string('latitud_turistico', 25);
            $table->string('longitud_turistico', 25);
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
        Schema::dropIfExists('sitio_turisticos');
    }
}
