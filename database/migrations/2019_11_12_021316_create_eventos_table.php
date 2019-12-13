<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('titulo_evento', 50)->unique();
            $table->string('direccion_evento', 254);
            $table->boolean('entrada_evento');
            $table->string('precio_evento',254)->nullable();
            $table->string('hashtag_evento',245)->nullable();
            $table->time('hora_inicio_evento')->nullable();
            $table->time('hora_termino_evento')->nullable();
            $table->date('fecha_inicio_evento');
            $table->date('fecha_termino_evento')->nullable();
            $table->string('latitud_evento', 25);
            $table->string('longitud_evento', 25);

            $table->string('descripcion_evento', 1024);
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
        Schema::dropIfExists('eventos');
    }
}
