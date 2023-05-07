@extends('layouts.base')

@section('content')
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
        <div class="col s12 m9 l9">
            <div class="row">
                <div class="col s12 m6 l4">
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
                </div>
                <div class="col s12 m6 l4">
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
                </div>
                <div class="col s12 m6 l4">
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
                </div>
                <div class="col s12 m6 l4">
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
                </div>
                <div class="col s12 m6 l4">
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
                </div>
                <div class="col s12 m6 l4">
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
                <div class="col s12 m6 l4">
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
                <div class="col s12 m6 l4"></div>
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
@endsection