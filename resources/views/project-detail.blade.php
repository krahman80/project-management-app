@extends('layouts.temp')

@section('content')


<div class="row mt-4">
    <div class="col-sm-9">
        <h3 class="text-left mt-5 mb-4">Project Detail</h3>
        <div class="row row-cols-1">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>Light card title</div>
                            <div>
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
                            </div>
                        </div>

                    </div>
                    <div class="card-body">
                        <!-- <h5 class="card-title">Light card title</h5> -->
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>

                </div>
            </div>
        </div>
        <div class="row row-cols-1 ">
            <div class="col mt-4">
                <h4 class="card-body">Project Tasks</h4>
            </div>
            <div class="col">
                <div class="card border border-0">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="" class="link-secondary">Task Number 1</a></h5>
                        <p class="card-text">This is a longer card with supporting text below as a
                            natural
                            lead-in to additional content.</p>
                    </div>
                    <div class="card-footer bg-transparent border border-0">
                        <div class="d-flex justify-content-between">
                            <div> <span class="badge rounded-pill bg-dark">member 1</span>
                                <span class="badge rounded-pill bg-light text-dark">member 2</span>
                            </div>
                            <div>
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card border border-0">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title"><a href="" class="link-secondary">Task Number 2</a></h5>
                        <p class="card-text">This is a longer card with supporting text below as a
                            natural
                            lead-in to additional content.</p>
                    </div>
                    <div class="card-footer bg-transparent border border-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <span class="badge rounded-pill bg-dark">task owner 1</span>
                            </div>
                            <div>
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-3 small">
        <h3 class="mt-5 mb-4">Sidebar</h3>
        <p>
            To start, make sure you’ve imported our functions, variables, mixins, and utilities.</p>
        <form action="">
            <div class="mb-3">
                <input type="text" class="form-control form-control-sm shadow-none" id="keyword" placeholder="keyword">
            </div>
            <h3>Radio</h3>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                    <label class="form-check-label" for="flexRadioDefault1">
                        Default radio
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Default checked radio
                    </label>
                </div>
            </div>
        </form>


    </div>
</div>
@endsection