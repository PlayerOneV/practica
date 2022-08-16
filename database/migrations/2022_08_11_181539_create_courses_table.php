<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Si seguimos la convención laravel sabe que crearemos una tabla courses 
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); //Columna id, autoincrement, principal key
            $table->string('name'); //Columna name tipo string (varchar 255)
            $table->string('description'); //Columna description tipo string (varchar 255)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses'); //Elimina nuestra tabla users si existe
    }
}
