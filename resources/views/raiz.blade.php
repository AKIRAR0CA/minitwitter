@extends('layouts.app')

@section('title','Partter. Es lo que está pasando.')

@section('content')

<div class="contenedor" >
    

        <div class="cabecera" >
            <img src="img/brand/fondo1.png" class="fondo" >
        </div>
            <div class="cabecera">
                <div class="col">
                    <img src="img/brand/Imagen1.png" width="80px" height="80px" >
                    <h1 class="text-6xl ">Lo que está </h1>
                    <h1 class="text-6xl ">pasando ahora</h1>  
                    <h2 class="text-4xl ">Únete a Partter hoy mismo.</h2>
                </div>
                <div class="col">
                    <a href="{{route('register.index') }}" class="btn-ghost round" >Crear cuenta</a>
                    <h5 class="font-bold">   ¿Ya tienes una cuenta?.</h5>
                    <a href="{{route('login.index') }}" class="btn-ghost sec round" >Iniciar sesión</a>
                </div>
            </div>
<div>
@endsection