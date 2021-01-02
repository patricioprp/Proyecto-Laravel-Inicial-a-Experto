<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        .active {
            text-decoration: none;
            color: green
        }
        .error{
            color:red;
            font-size:12px
        }

    </style>
    <title>Mi sitio</title>
</head>

<body>
    <header>
        <?php function activeMenu($url)
        {
        return \Request::is($url) ? 'active' : '';
        } ?>
        <nav>
            <a class="{{ activeMenu('/') }}" href="{{ route('home') }}">Inicio</a>
            <a class="{{ activeMenu('saludo/*') }}" href="{{ route('saludo', 'Patricio') }}">Saludo</a>
            <!--  el '*' indica que acepta cualquier parametros de la url-->
            <a class="{{ activeMenu('contactanos') }}" href="{{ route('contacto') }}">Contacto</a>
        </nav>
    </header>
    @yield('contenido')
    <footer>Copyright {{ date('Y') }}</footer>
</body>

</html>
