<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitas', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->string('pais', 254);
            $table->Biginteger('user_id')->unsigned()->nullable();
            $table->Biginteger('mype_id')->unsigned()->nullable();

            $table->timestamps();
        });

        Schema::table('visitas', function($table) {
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('mype_id')->references('id')->on('mypes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('visitas');
    }
}
