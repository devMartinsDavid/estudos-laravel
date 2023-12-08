<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark d-flex">
            <div class="collapse navbar-collapse justify-content-center" id="navbar">
                <a href="/" class="navbar-brand" id="logo">
                    Logo
                </a>
                <ul class="nav-item">
                    <li class="nav-link" ><a class="btn btn-primary" href="/">Home</a></li>
                </ul>
                <ul class="nav-item">
                    <li class="nav-link" ><a class="btn btn-primary" href="/create">Crie um evento</a></li>
                </ul>
                <ul class="nav-item">
                    <li class="nav-link" ><a class="btn btn-primary" href="/contact">Contato</a></li>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container-fluid">
    @yield('content')
    </section>
    <footer>
        <p>@Estudos Laravel &copy; 2023</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>