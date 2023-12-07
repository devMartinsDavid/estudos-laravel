<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>
        <link rel="stylesheet" href="./css/style.css">
        <script src="./js/scripts.js"></script>
    </head>
    <body>
        @yield('content')
        <footer>
            <p>@Estudos Laravel &copy; 2023</p>
        </footer>
    </body>
</html>
