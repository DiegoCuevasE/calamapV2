<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLocomocion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locomociones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('linea_locomocion', 2);
            $table->string('recorrido_locomocion', 1);
            $table->boolean('tipo_locomocion');
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
        Schema::dropIfExists('locomociones');
    }
}
