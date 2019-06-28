<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaImagenmype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagenmypes', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de mype
            $table->unsignedInteger('mype_id');
            $table->foreign('mype_id', 'fk_imagenmypes_mypes')->references('id')->on('mypes')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('enlace_imagen_mype', 254);
            $table->string('tipo_imagen_mype', 15);
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
        Schema::dropIfExists('imagenmypes');
    }
}
