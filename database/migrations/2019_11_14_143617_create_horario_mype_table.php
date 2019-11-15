<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioMypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_mype', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->unsignedBigInteger('horario_id');
            $table->foreign('horario_id')->references('id')->on('horarios')->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('mype_id');
            $table->foreign('mype_id')->references('id')->on('mypes')->onDelete('cascade')->onUpdate('cascade');

            $table->String('hora_inicio',20)->nullable();
            $table->String('hora_termino',20)->nullable();
            $table->String('hora_inicio_dos',20)->nullable();
            $table->String('hora_termino_dos',20)->nullable();

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
        Schema::dropIfExists('horario_mype');
    }
}
