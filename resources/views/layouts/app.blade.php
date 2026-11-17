<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Kasir Ende')</title>
    
    <!-- Panggil CSS lokal -->
    <link rel="stylesheet" href="{{ asset('css/kasir.css') }}">
</head>
<body>
    <header>
        Kasir Ende 
        | <a href="{{ route('katalog.index') }}">Katalog</a>
    </header>
    
    <main>
        @yield('content')
    </main>
</body>
</html>