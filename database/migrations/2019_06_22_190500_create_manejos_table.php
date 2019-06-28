<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateManejosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manejos', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de mype
            $table->unsignedInteger('mype_id');
            $table->foreign('mype_id', 'fk_manejos_mypes')->references('id')->on('mypes')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de idioma
            $table->unsignedInteger('idioma_id');
            $table->foreign('idioma_id', 'fk_manejos_idiomas')->references('id')->on('idiomas')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('dominio_idioma');
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
        Schema::dropIfExists('manejos');
    }
}
