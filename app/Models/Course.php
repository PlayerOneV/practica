<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //Creamos una función dentro de la clase con el nombre de la tabla a la que se relaciona
    public function users()
    {
        //Indicamos - course pertenece a muchos usuarios, entre parentesis la clase del modelo User
        return $this -> belongsToMany(User::class);
    }
}
