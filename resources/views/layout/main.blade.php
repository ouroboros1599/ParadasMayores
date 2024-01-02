<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/> --}}
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

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
                    <img class="h-full " src="./img/smec-blanco.png" alt="">
                </div>
                <div class="flex-1 self-center">
                    <h1 class="text-3xl font-bold text-center text-white">@yield('encabezado')</h1>
                </div>
                <div class="flex-initial">
                    <img class="h-full " src="./img/user.png" alt="">
                </div>
            </div>
        </div>
    </header>

    <div class="w-full h-full" >
        @yield('contenido')
    </div>
        
    <footer>
        <div class="w-full h-24 bg-slate-900">
            @yield('footer')
        </div>
    </footer>
</body>
</html>