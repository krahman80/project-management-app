@extends('layouts.base')

@section('content')
<div class="container">
    <div class="row margin top-40 bottom-40">
        <div class="col s12">
            <h3 class='text-center'>Project Details
            </h3>
            <h6 class='text-center grey-text lighten-3'>
                developed by <a href="#">Krahman80</a>
            </h6>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m9 l9">
            <div class="row">
                <div class="col s12">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">Project Name </span>
                            {{-- <a class="btn-floating halfway-fab waves-effect waves-light teal"><i
                                    class="material-icons">add</i></a> --}}
                            <p>I am a project description. I am good at containing small bits of information.
                            </p>
                        </div>
                        <div class="card-action">
                            <a href="#">project member</a>
                            <div class="chip">
                                tag1
                                <i class="close material-icons">close</i>
                            </div>
                            <div class="chip">
                                tag2
                                <i class="close material-icons">close</i>
                            </div>
                            <div class="chip">
                                tag3
                                <i class="close material-icons">close</i>
                            </div>
                            <div class="chip">
                                tag4
                                <i class="close material-icons">close</i>
                            </div>
                            <div class="chip">
                                memeber5
                                <i class="close material-icons">close</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <h5 class="header margin">Project tasks</h5>
                    <div class="horizontal margin bottom-20 top-20">
                        <div class="card-stacked">
                            <h6><a href="#">Revise code</a></h6>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am a
                                    very simple card. I am good at containing small bits of information</p>
                            </div>
                            <div class="card-action">
                                <span>
                                    <div class="chip">
                                        tag3
                                    </div>
                                </span><span class="badge teal"><span class="white-text">completed</span></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="horizontal margin bottom-20 top-20">
                        <div class="card-stacked">
                            <h6><a href="#">Revise code</a></h6>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information. I am a
                                    very simple card. I am good at containing small bits of information</p>
                            </div>
                            <div class="card-action">
                                <span>
                                    <div class="chip">
                                        tag1
                                    </div>
                                </span><span class="badge yellow darken-2"><span
                                        class="white-text">outstanding</span></span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="horizontal margin bottom-20 top-20">
                        <div class="card-stacked">

                            <h6><a href="#">Revise code</a></h6>
                            <div class="card-content">
                                <p>I am a very simple card. I am good at containing small bits of information.</p>
                            </div>
                            <div class="card-action">
                                <span>
                                    <div class="chip">
                                        tag2
                                    </div>
                                </span><span class="badge light-blue darken-2"><span class="white-text">in
                                        progress</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m3 l3 padding left-20">

            <form>
                <h5>Invited Project</h5>
                <ul class="collection" style="border: none;">
                    <li class="collection-item"><a href="#!">Project abcd</a></li>
                    <li class="collection-item"><a href="#!">Project defgh</a></li>
                    <li class="collection-item"><a href="#!">Project other</a></li>
                    <li class="collection-item"><a href="#!">Some other project</a></li>
                    <li class="collection-item"><a href="#!">more...</a></li>
                </ul>
        </div>
    </div>
</div>
@endsection