<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class RegisterController extends Controller
{
    public function create(){
        return view('auth.register');
    }
    
    public function store(){

        $this->validate(request(),[
            'name'=>'required',
            'nickname'=>'required',
            'email'=>'required',
            'password'=>'required|min:6',
        ]);

        $user = User::create(request(['name','email','password','nickname','fechaNac']));
        auth()->login($user);
        return redirect()->to('/home');
    }
    
}
