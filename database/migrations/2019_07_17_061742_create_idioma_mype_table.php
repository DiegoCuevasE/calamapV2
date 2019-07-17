<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIdiomaMypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('idioma_mype', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('mype_id');
            $table->foreign('mype_id')->references('id')->on('mypes')->onDelete('cascade')->onUpdate('cascade');
            //
            //foreanea de idioma
            $table->unsignedBigInteger('idioma_id');
            $table->foreign('idioma_id')->references('id')->on('idiomas')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('idioma_mype');
    }
}
