<!DOCTYPE html>
<html>
    <head>
        <title>Pagina Teste</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Classificados</a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('anuncios.create') }}">Novo Anuncio</a>
            </li>
        </ul>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="{{ asset ('/resources/js/app.js') }}"></script>
</body>
</html>