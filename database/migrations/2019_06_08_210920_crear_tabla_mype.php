<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaMype extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mypes', function (Blueprint $table) {
            $table->increments('id');
            //foreanea de user
            $table->unsignedInteger('user_id');
            $table->foreign('user_id', 'fk_mypes_users')->references('id')->on('users')->on('users')->onDelete('cascade')->onUpdate('cascade');
            //
            $table->string('nombre_fantasia_mype', 20)->nullable();;
            $table->string('razon_social_mype', 100)->unique()->nullable();;
            $table->string('rubro_mype', 50)->nullable();;
            $table->string('direccion_mype', 50)->nullable();;
            $table->string('descripcion_mype', 254)->nullable();;
            $table->string('horario_mype', 254)->nullable();;
            $table->boolean('estado_mype')->nullable();;
            $table->string('telefono_mype', 15)->nullable();;
            $table->string('celular_mype', 15)->nullable();;
            $table->string('correo_mype', 50)->nullable();;
            $table->string('facebook_mype', 50)->nullable();;
            $table->string('instagram_mype', 50)->nullable();;
            $table->string('pagina_mype', 50)->nullable();;
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
