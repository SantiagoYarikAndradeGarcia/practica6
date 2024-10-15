<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    @vite(['resources/js/app.js'])
</head>
<style>
    html, body {
        margin: 0;
        padding: 0;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    body {
        min-height: 100vh;
    }

    .center-text {
        text-align: center;
        font-size: 50px;
        margin: auto;
    }

    footer {
        background-color: #e6e6e6;
        text-align: center;
        padding: 10px;
        margin-top: auto;
        width: 100%;
    }
</style>
<body>
    @guest
        @include("menu1")
        @empty($__env->yieldContent('contenidomn1'))
            <p class="center-text">Bienvenido a la Práctica 2</p>
        @endempty
        @yield("contenidomn1")
        <footer>
            <p>
                <a href="https://getcomposer.org/doc/00-intro.md" target="_blank">Composer</a> /
                <a href="https://laravel.com/docs/11.x/eloquent" target="_blank">Eloquent</a> /
                <a href="https://laravel.com" target="_blank">Laravel</a> /
                <a href="https://nodejs.org/en/" target="_blank">Node.js</a> /
                <a href="https://www.php.net" target="_blank">PHP</a>
            </p>
        </footer>
    @endguest
    @auth
        @include("menu2")
        @empty($__env->yieldContent('contenidomn2'))
            <p class="center-text">Aquí va la descripción de la Práctica 2</p>
        @endempty
        @yield("contenidomn2")
        <footer> 
            <p>Nombre de usuario: {{ Auth::user()->name }}</p>
            <p>Email: {{ Auth::user()->email }}</p> 
        </footer>
    @endauth
</body>
</html>