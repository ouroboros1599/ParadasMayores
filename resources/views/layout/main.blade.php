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
            <div class="flex w-full h-28 bg-[#0a2140]">
                <div class="flex-initial">
                    <img class="h-full " src="./img/smec-logo-blanco.png" alt="">
                </div>
                <div class="flex-1 self-center">
                    <h1 class="text-3xl font-bold text-center text-white">@yield('encabezado')</h1>
                </div>
                
                <div class="flex mr-10">
                    <button class="flex items-center text-x1 font-medium text-white hover:text-gray-700 hover:textborder-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        <div>CASTILLO MORALES, JESÚS CRISTÓBAL ANTONIO</div>
                        <div class="ml-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </button>
                </div>
                          
            </div>
        </div>
    </header>
    
    <div>
        @yield('nav')
        <ul class="w-full h-16 bg-[#0a2140] flex space-x-10 items-center text-center justify-center">
            <li>
                <a href="{{route('usuario.index')}}" class=" text-white font-bold hover:text-gray-700 hover:textborder-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    LISTADO DE PARADAS MAYORES
                </a>
            </li>
            <li>
                <a href="{{route('planificacion.index')}}" class=" text-white font-bold hover:text-gray-700 hover:textborder-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    PLANIFICACIÓN
                </a>
            </li>
            <li>
                <a href="{{route('rol.index')}}" class=" text-white font-bold hover:text-gray-700 hover:textborder-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                    EJECUCIÓN
                </a>
            </li>
        </ul>
    </div>

    <div class="w-full h-full" >
        @yield('contenido')
    </div>
        
    <footer>
        <div class="w-full h-24 text-center p-10 text-sm bg-slate-900 text-white ">
            @yield('footer')
            <p>Paradas Mayores © 2024 - {{date('Y')}} </p>
        </div>
    </footer>
</body>
</html>