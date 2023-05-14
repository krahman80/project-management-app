@extends('layouts.app')

@section('content')


<div class="row mt-4">
    <div class="col-sm-9">
        <h3 class="text-left mt-5 mb-4">Task Detail</h3>
        <div class="row row-cols-1 mb-3">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div>Task title</div>
                            <div>
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-lg"></i></a>
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
                <hr>
                <br>
                <h4 class="card-body">Task Comments</h4>
            </div>
            <div class="col">
                <form action="">
                    <div class="mb-3">
                        {{-- <label for="exampleFormControlTextarea1" class="form-label">Comments</label> --}}
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-sm bd-cyan-800 btn-secondary" type="submit">Comment</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row row-cols-1 mb-3">

            <div class="col mb-2">
                <div class="card border border-0">
                    <div class="card-body pb-0 mb-0 ps-0 ms-0">
                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <small>
                                    <span class="text-muted">Posted</span> <span class="text-black">6 minutes
                                        ago</span>
                                    <span class="text-muted">ago
                                        by</span> <span class="text-black">user 1</span>
                                </small>
                            </div>
                            <div>
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
                            </div>
                        </div>
                        <p class="card-text">This is a longer card with supporting text below as a
                            natural
                            lead-in to additional content. This is a longer card with supporting text below as a
                            natural
                            lead-in to additional content.</p>
                    </div>
                </div>
            </div>

            <div class="col mb-2">
                <div class="card border border-0">
                    <div class="card-body pb-0 mb-0 ps-0 ms-0">
                        <div class="d-flex justify-content-between mb-2">
                            <div>
                                <small>
                                    <span class="text-muted">Posted</span> <span class="text-black">2 minutes
                                        ago</span>
                                    <span class="text-muted">ago
                                        by</span> <span class="text-black">user 1</span>
                                </small>
                            </div>
                            <div>
                                <a href="#" class="link-primary"><i class="bi bi-pencil"></i></a>&nbsp;
                                <a href="#" class="link-danger"><i class="bi bi-x-square"></i></a>
                            </div>
                        </div>
                        <p class="card-text">This is a longer card with supporting text below as a
                            natural
                            lead-in to additional content.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="col-sm-3">
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