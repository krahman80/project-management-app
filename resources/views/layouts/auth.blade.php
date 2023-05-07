<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/materialize.min.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    <link href="{{ asset('css/materialize.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <header>
        {{-- <nav class="nav-extended blue-grey darken-1">
            <div class="nav-wrapper">
                <div class="container">
                    <a href="index.html" class="brand-logo">PM</a>
                </div>
            </div>
        </nav> --}}
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer white">
        {{-- <div class="footer-copyright">
            <div class="container">
                <span class="black-text">© 2014 Copyright Text</span>

            </div>
        </div> --}}
    </footer>
    @stack('script')

</body>

</html>