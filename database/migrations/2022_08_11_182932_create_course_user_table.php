<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Si seguimos la convención laravel sabe que crearemos una tabla course_user
        Schema::create('course_user', function (Blueprint $table) {
            $table->id(); //Columna id, autoincrement, principal key
            $table->unsignedBigInteger('course_id'); //Columna course_id de tipo numerico
            $table->unsignedBigInteger('user_id'); //Columna user_id de tipo numerico

            //Indicamos: la columna course_id hace referencia a la columna id en la tabla courses
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
            
            //Indicamos: la columna user_id hace referencia a la columna id en la tabla users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_user'); //Elimina nuestra tabla course_user si existe
    }
}
