<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SessionsController extends Controller
{
    public function create(){
        return view('auth.login');
    }

    public function store(){
        if(auth()->attempt(request(['email','password']))==false){
            return back()->withErrors([
                'message'=>'El correo o contraseña ingresadas son incorrectas, intentelo nuevamente',
            ]);   
        }else{
            if(auth()->user()->role =='admin'){
                return redirect()->route('admin.index');  
            }else{
                return redirect()->to('/home');  
            }
        }
         
    }

    public function destroy(){
        auth()->logout();
        return redirect()->to('/');
    }
}
