<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request){
        //Validar datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'password' => 'required|min:8|max:12'
        ]);

        //Registrar en la tabla
        UserModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        //Informar al usuario
        return response()->json([
            'message' => 'User successfully created'
        ]);
    }

    public function get_user(){
        $users = UserModel::all();

        return view('index', compact('users'));
    }
}
