<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">

    <title>Laravel Project Management</title>
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
        <div class="container">
            <div class="row margin top-40 bottom-40">
                <div class="col s12">
                    <h3 class='text-center'>Project List
                    </h3>
                    <h6 class='text-center grey-text lighten-3'>
                        developed by <a href="#">Krahman80</a>
                    </h6>
                </div>
            </div>
            <div class="row">
                <div class="col s12 m9 l9 cards-container ">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Card Title 1</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#">a link</a>
                        </div>
                    </div>
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title 2</span>
                            <p>I am a very simple card. I am good at containing small bits of information.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is</a>
                        </div>
                    </div>
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title 3</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title 4</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title 5</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <span class="card-title">Card Title</span>
                            <p>I am a very simple card. I am good at containing small bits of information.
                                I am convenient because I require little markup to use effectively.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">This is a link</a>
                            <a href="#">This is a link</a>
                        </div>
                    </div>
                </div>
                <div class="col s12 m3 l3 padding left-20">

                    <form>
                        <h5>Search</h5>
                        <div class="input-field">
                            <input type="text" class="validate" placeholder="keywords">
                            <label class="label-icon" for="search"></label>
                            {{-- <i class="material-icons">close</i> --}}
                        </div>
                        <h5>Project Status</h5>
                        <p>
                            <label>
                                <input name="projectStatus" type="radio" />
                                <span>Completed</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="projectStatus" type="radio" />
                                <span>Postponed</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="projectStatus" type="radio" />
                                <span>In progress</span>
                            </label>
                        </p>
                        <h5>Assigned to</h5>
                        <p>
                            <label>
                                <input name="assignedTo" type="radio" />
                                <span>all</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="assignedTo" type="radio" />
                                <span>Username</span>
                            </label>
                        </p>
                        <p>
                            <button class="btn waves-effect waves-light" type="submit" name="action">Search
                                <i class="material-icons right">search</i>
                            </button>
                        </p>
                    </form>

                </div>
            </div>
        </div>
    </main>

    <footer class="page-footer blue-grey lighten-3">
        <div class="footer-copyright">
            <div class="container">
                <span class="black-text">© 2014 Copyright Text</span>
                <a class="black-text text-lighten-4 right" href="#!">More Links</a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var elems = document.querySelectorAll('.sidenav');
            var instances = M.Sidenav.init(elems, {});
        });
    </script>
</body>

</html>