<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->Bigincrements('id');
            $table->string('nombre',50);
            $table->string('apellido_usuario', 50)->nullable();
            $table->string('password');
            $table->string('telefono_usuario', 15)->nullable();
            $table->string('celular_usuario',15)->nullable();
            $table->string('email')->unique();
            $table->date('fechaNac')->nullable();
            $table->string('nacionalidad_usuario')->nullable();
            $table->boolean('genero')->nullable();
            $table->string('tipo_usuario',50);
            $table->boolean('estado_usuario')->nullable();;
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
