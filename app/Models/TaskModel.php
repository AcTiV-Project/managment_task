<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TaskModel extends Model
{
    //Seleccionando la tabla 
    protected $table = 'tasks';

    //ingresar los datos
    protected $fillable = [
        'user_id',
        'assigned_by',
        'title',
        'description',
        'state',
        'priority',
        'due_date'
    ];
}
