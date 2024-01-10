<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> --}}
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="icon" href="{{ asset('img/smec-color-icon.png')}}" type="image/png">
    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Titulo de la pagina -->
    <title>@yield('tituloPagina')</title>
</head>
<body id="app">  
    <header>
        <div class="header">
            @yield('header')
            <div class="w-full h-28 bg-[#0a2140] flex">
                <div class="flex-initial">
                    <img class="h-full " src="./img/smec-logo-blanco.png" alt="">
                </div>
                <div class="flex-1 self-center">
                    <h1 class="text-3xl font-bold text-center text-white">@yield('encabezado')</h1>
                </div>
                <div class="flex justify-center items-center text-right">
                    <ul class="text-white pr-5 font-bold">
                        <li><p>Usuario</p></li>
                        <li><p>Configuración</p></li>
                        <li><p>Salir</p></li>
                    </ul>
                    <div class="flex-1">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-24 h-24 text-white ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </header>
    
    <div>
        @yield('nav')
        <ul class="w-full h-16 bg-[#0a2140] flex space-x-10 items-center text-center justify-center">
            <li><a href="{{route('usuario.index')}}" class=" text-white font-bold">LISTADO DE PARADAS MAYORES</a></li>
            <li><a href="{{route('planificacion.index')}}" class=" text-white font-bold">PLANIFICACIÓN</a></li>
            <li><a href="{{route('rol.index')}}" class=" text-white font-bold">EJECUCIÓN</a></li>
        </ul>
    </div>

    <div class="w-full h-full" >
        @yield('contenido')
    </div>
        
    <footer>
        <div class="w-full h-24 absolute bottom-0 bg-slate-900 ">
            @yield('footer')
        </div>
    </footer>
</body>
</html>