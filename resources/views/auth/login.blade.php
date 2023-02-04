@extends('layouts.app')

@section('title','login')

@section('content')
<div class="cont">
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" align="center">
        <img src="img/brand/Imagen1.png" width="80px" height="80px" >
        <h1 class="text-3xl text-center font-bold">Inicia sesión en MiniTwitter</h1>
        <form class="mt-4" method="POST" action="">
            @csrf
            <input type="email" class="border borde-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Email" 
            id="email" name="email">
            
            <input type="password" class="border borde-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" placeholder="Contraseña" 
            id="password" name="password">
            
            @error('message')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
            @enderror

            <div class="center">
            <button type="submit" class="btn-ghost round "style="width:100%; height:100%">Ingresar</button>

            <h5 class=" font-bold">¿No tienes una cuenta? <a href="{{route('register.index') }}" class="logreg">Registrate</a></h5>
            </div>
    </div>
</div>    
@endsection