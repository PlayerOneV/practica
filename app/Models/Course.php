<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //Relación muchos a muchos
    public function users()
    {
        return $this -> belongsToMany('App\Models\User');
    }
}
