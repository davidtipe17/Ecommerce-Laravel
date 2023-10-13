<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistroController extends Controller
{
    public function index(){
        return view('web.registro');
    }
    
    public function login(Request $request){
        $email = $request->email;
        $clave = $request->clave;
        //Valido el email, password y que el usuario este activo
        if(Auth::attempt(['email'=>$email,'password'=>$clave,'estado'=>'A'])){
            return redirect('/');
        }else{
            return redirect('/registro');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
