@extends('layouts.admin')

@section('title','MiniTwitter. Administrador.')

@section('content')


    <h1 class="text-5xl text-center pt-24">Administrador</h1>
    <div>
       <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        <li class="mx-8">
        <p class="text-xl">welcome <b>{{auth()->user()->nickname}}</b></p>
        </li>
        <a href="{{route('login.destroy')}}" class="font-semibold border-2 border-white py-2 px-4 rounded-md
         hover:bg-white hover:text-indigo-700">Log Out</a>
    </div>
    
@endsection