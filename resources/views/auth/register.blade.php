@extends('layouts.app')

@section('title','register')

@section('content')
    
    <div class="block mx-auto my-12 p-8 bg-white w-1/3 border border-gray-200 rounded-lg shadow-lg" align="center">
        <img src="img/brand/Imagen1.png" width="80px" height="80px" >
        <h1 class="text-3xl text-center font-bold">Crea tu cuenta</h1>
        <form class="mt-4" method="POST" action="">
        @csrf
            <input type="text" class="border borde-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
            placeholder="Nombre" id="name" name="name">

            @error('name')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
            @enderror

            <input type="text" class="border borde-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
            placeholder="Nickname" id="nickname" name="nickname">

            @error('nickname')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
            @enderror

            <input type="email" class="border borde-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
            placeholder="Correo Electronico" id="email" name="email">

            @error('email')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
            @enderror

            <input type="password" class="border borde-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white"
            placeholder="Contraseña" id="password" name="password">

            @error('password')
            <p class="border border-red-500 rounded-md bg-red-100 w-full text-red-600 p-2 my-2">*{{$message}}</p>
            @enderror

           

            <FONT SIZE=2  class="font-bold">Fecha de nacimiento</font><p>
            <FONT SIZE=2 >Esta información no será pública. Confirma tu propia edad, incluso si esta cuenta es para una empresa, una mascota u otra cosa.</font>

            <input type="date" class="border borde-gray-200 rounded-md bg-gray-200 w-full text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" 
            placeholder="Fecha de Nacimiento" id="fechaNac" name="fechaNac">
            
            <!--<input type="int" class="border borde-gray-200 rounded-md bg-gray-200 w-full
            text-lg placeholder-gray-900 p-2 my-2 focus:bg-white" id="telefono" placeholder="Telefono">-->
            
            <div class="center">
            <button type="submit" class="btn-ghost round" style="width:100%; height:100%">Registrar</button>
            <!-- <button type="submit" class="btn-ghost sec round" style="width:100%; height:100%">Cancelar</button>-->
            </div>

    </div>
@endsection