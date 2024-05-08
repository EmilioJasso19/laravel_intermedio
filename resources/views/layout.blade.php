<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <style>
        .active{
            text-decoration:none;
            color: dodgerblue;
        }

        .error{
            color: red;
            front-size: 12px;
        }
    </style>
    <title>Mi sitio</title>
</head>
<body>
    <header>
        <?php function activeMenu($url)
        {
            return request()->is($url) ? 'active' : '';
        }?>
        <nav>
            <a class="{{ activeMenu('bienvenido')}}"
               href="{{route('home')}}">Inicio</a>
            <a class="{{ activeMenu('saludo/*')}}"
               href="{{ route('saludo', 'Henry')}}">Saludo</a>
            <a class="{{ activeMenu('mensajes/create')}}"
               href="{{ route('mensajes.create')}}">Contacto</a>
            <a class="{{ activeMenu('mensajes')}}"
               href="{{ route('mensajes.index')}}">Mensajes</a>
        </nav>
    </header>
    @yield('contenido')

</body>

</html>
