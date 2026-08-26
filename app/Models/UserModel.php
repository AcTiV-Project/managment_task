<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    //Seleccionando la tabla de la base de datos
    protected $table = 'users';

    //Ingresar datos en estos campos
    protected $fillable = [
        'name',
        'email',
        'password'
    ];
}
