<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@300;400&family=Karla:wght@400;700&family=Poppins:ital,wght@0,500;1,300&display=swap"
        rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="container">
        @yield('content')
        <footer>
            <p>Copyright &copy; @php
                echo date("Y");
                @endphp Papa Johns. All rights reserved.</p>
        </footer>
    </div>
</body>

</html>