<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLocomocionMypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locomocion_mype', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('locomocion_id');
            $table->foreign('locomocion_id')->references('id')->on('locomocions')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de mype
            $table->unsignedBigInteger('mype_id');
            $table->foreign('mype_id')->references('id')->on('mypes')->onDelete('cascade')->onUpdate('cascade');
            //
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
        Schema::dropIfExists('locomocion_mype');
    }
}
