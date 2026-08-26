<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TaskModel;
use App\Models\UserModel;


class TaskController extends Controller
{
    public function index()
    {
        $users = UserModel::all();

        return view('task', compact('users'));
    }

    public function store(Request $request){
        //Validar datos
        $request->validate([
            'title' => 'required|string|min:3|max:100',
            'description' => 'required|string',
            'due_date' => 'required|date'
        ]);

        //Registrar datos
        TaskModel::create([
            'user_id' => $request->user_id,
            'assigned_by' => Auth::id(), // Usuario autenticado
            'title' => $request->title,
            'description' => $request->description,
            'state' => $request->state,
            'priority' => $request->priority,
            'due_date' => $request->due_date
        ]);

        //Informar al usuario
        return response()->json([
            'message' => 'Task successfully created'
        ]);
    }
}
