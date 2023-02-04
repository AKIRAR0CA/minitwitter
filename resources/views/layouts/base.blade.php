<! DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') /Partter</title>
    <link href="{{asset('img/brand/Imagen1.png')}}" rel=icon type="imagen/png"></link>    
    <link rel="stylesheet" href="{{asset('css/estilos.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <nav class="menu">
        <section class="menu__container">
            <a href="{{route('home.index')}}" > <img src="img/brand/Imagen2.png" width="40px" height="40px" ></a>

            <ul class="menu__links">
                <li class="menu__item">
                    <a href="#" class="menu__link">Modo Nocturno</a>
                </Li>
                <li class="menu__item">
                    <a href="#" class="menu__link">Mensajes</a>
                </Li>
                <li class="menu__item">
                    <a href="#" class="menu__link">Notificaciones</a>
                </Li>
    
                <li class="menu__item menu__item--show">
                    <a href="#" class="menu__link"> {{auth()->user()->nickname}} <img src="assets/arrow.svg" class="menu__arrow"></a>
    
                    <ul class="menu__nesting">
                        <li class="menu__inside">
                            <a href="{{route('perfil.index')}}" class="menu__link menu__link--inside">Perfil</a>
                        </Li>
                        <li class="menu__inside">
                            <a href="#" class="menu__link menu__link--inside">Configuraciones</a>
                        </Li>
                        <li class="menu__inside">
                            <a href="{{route('login.destroy')}}" class="menu__link menu__link--inside">Salir</a>
                        </Li>
                    </Ul>
                </Li>
            </Ul>  
            <div class="menu__hamburguer">
                <img src="assets/menu.svg" class="menu__img">
            </div>  
        </section>
    </Nav>
    <div class="contenido">
        @yield('content')
    </div >
    <footer class="text-center font-bold">Tecnologia Web - Grupo 20SC &copy; 2022</footer>
    <script src="{{asset('js/aplicación.js')}}"></script>
    
</body>
</HTML>