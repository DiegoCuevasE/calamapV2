<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nombre_fantasia_mype', 20)->unique();;
            $table->string('rubro_mype', 50)->nullable();;
            $table->string('direccion_mype', 50)->nullable();;
            $table->string('descripcion_mype', 1024)->nullable();;
            $table->string('horario_mype', 30)->nullable();;
            $table->boolean('estado_mype')->nullable();;
            $table->string('telefono_mype', 15)->nullable();;
            $table->string('celular_mype', 15)->nullable();;
            $table->string('correo_mype', 50)->nullable();;
            $table->string('facebook_mype', 50)->nullable();;
            $table->string('instagram_mype', 50)->nullable();;
            $table->string('pagina_mype', 50)->nullable();;
            $table->string('latitud_mype', 25);
            $table->string('longitud_mype', 25);
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
        Schema::dropIfExists('mypes');
    }
}
