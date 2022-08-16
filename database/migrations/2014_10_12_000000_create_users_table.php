<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Si seguimos la convención laravel sabe que crearemos una tabla users 
        Schema::create('users', function (Blueprint $table) { 
            $table->id(); //Columna id, autoincrement, principal key
            $table->string('img'); //Columna img tipo string (varchar 255)
            $table->string('name'); //Columna name tipo string (varchar 255)
            $table->string('apellidoP'); //Columna apellidoP tipo string (varchar 255)
            $table->string('apellidoM'); //Columna apellidoM tipo string (varchar 255)
            $table->string('email')->unique(); //Columna email tipo string (varchar 255) y debe ser unico
            $table->boolean('status'); //Columna status tipo boolean
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users'); //Elimina nuestra tabla users si existe
    }
}
