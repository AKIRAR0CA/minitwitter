<!DOCTYPE html>
<html lang="es">
    <head>
       <meta charset="utf=8">
       <meta name="viewport" content="width=device-width, user-scalable=no,initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
       <title>@yield('title') /Partter</title>
       <link href="{{asset('img/brand/Imagen1.png')}}" rel=icon type="imagen/png"></link>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">
       <link rel="stylesheet" href="{{asset('css/app.css')}}">

    </head>
    <body class="bg-gray-100 text-gray-800">
        <div>
            @yield('content') 
        </div>


        <footer class="text-center font-bold">Tecnologia Web - Grupo 20SC &copy; 2022</footer>

    </body>
</html>
