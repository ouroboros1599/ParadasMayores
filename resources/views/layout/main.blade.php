<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <!-- Titulo de la pagina -->
    <title>@yield('tituloPagina')</title>
</head>
    <body>  
        <header>
            <div class="header">
                @yield('header')
            </div>
        </header>

        <div class="container">
            @yield('contenido')
        </div>
        
        <footer>
            <div class="footer">
                @yield('footer')
            </div>
        </footer>
    </body>
</html>