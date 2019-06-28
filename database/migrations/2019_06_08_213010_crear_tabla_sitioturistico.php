<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaSitioturistico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitioturisticos', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de usuario
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'fk_sitioturisticos_users')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('tipo_turistico', 50);
            $table->string('nombre_turistico', 50)->unique();
            $table->string('horario_turistico', 254);
            $table->string('direccion_turistico', 254);
            $table->string('descripcion_turistico', 254);
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
        Schema::dropIfExists('sitioturisticos');
    }
}
