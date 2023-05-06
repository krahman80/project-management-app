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
        <nav class="nav-extended blue-grey darken-1">

            <div class="nav-wrapper">
                <div class="container">
                    <a href="index.html" class="brand-logo">Project Management</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li class="active"><a href="index.html"><i class="material-icons left">home</i>Home</a></li>
                        <li><a href="about.html">
                                <!--<i class="material-icons left">info</i>-->About
                            </a></li>
                        <li><a href="form.html">
                                <!--<i class="material-icons left">mail</i>-->Contact
                            </a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <ul id="mobile-demo" class="sidenav">
            <li><a href="index.html">Home</a></li>
            <li><a href="quiz.html">About</a></li>
            <li><a href="form.html">Contact</a></li>
            <li>
                <div class="divider"></div>
            </li>
            <li><a class="subheader">Login</a></li>
            <li><a class="waves-effect" href="#!">Register</a></li>
        </ul>
    </header>

    <main>
        @yield('content')
    </main>

    <footer class="page-footer blue-grey lighten-3">
        <div class="footer-copyright">
            <div class="container">
                <span class="black-text">© 2014 Copyright Text</span>
                <a class="black-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>
    @stack('script')
</body>

</html>