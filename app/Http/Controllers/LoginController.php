<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //Mostrar la vista
    public function showlogin(){
        return view('login');
    }

    public function login(Request $request){
        //Validar datos recibidos
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Crear la session y redirigir a index
        if(Auth::attempt($credentials)){
            /*
            $user = $request->session()->regenerate();

            //return redirect('/');

            return view('panel', compact('user'));
            */

            $request->session()->regenerate();

            $user = Auth::user();

            return view('panel', compact('user'));
        }

        //Informar si las credenciales son incorrectas
        return back()->withErrors([
            'email' => 'Las credenciales son incorrectas',
        ]);
    }

    //Obtener los datos del usuario y mostrarlo en la vista blade
    public function index()
    {
        $user = Auth::user();

        return view('panel', compact('user'));
    }

    //Cerrar la session
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
