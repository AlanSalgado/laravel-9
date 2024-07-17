<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Aplicacion - @yield('title')</title> -->
</head>
<body>
    <!--Include de php para la navegacion-->
    <!-- @include('partials.navigation') -->

    {{-- COMENTRIOS DE BLADE--}}

    <!--Ubicacion del Contenido variable de cada pagina-->
    <!-- @yield('content') -->
    {{ $slot }}
</body>
</html>