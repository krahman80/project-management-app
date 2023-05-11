@extends('layouts.app')

@section('content')


<div class="row mt-4">
    <div class="col-sm-9">
        <h3 class="text-left mt-5 mb-4">Project List</h3>
        <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">
            <div class="col">
                <div class="card border-dark shadow-sm">
                    <div class="card-header border-secondary"><a href="#">Header 1</a></div>
                    <div class="card-body">
                        {{-- <h5 class="card-title">Light card title</h5> --}}
                        <p class="card-text">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header bg-transparent">Header 2</div>
                    <div class="card-body">
                        {{-- <h5 class="card-title">Success card title</h5> --}}
                        <p class="card-text">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>
                    <div class="card-footer bg-transparent ">Footer</div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card title 5</h5>
                        <p class="small">This is a longer card with supporting text below as a
                            natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural
                            lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="col-sm-3">
        <h3 class="text-left mt-5 mb-4">Search</h3>
        <p>
            To start, make sure you’ve imported our functions, variables, mixins, and utilities.</p>
        <form action="">
            <div class="mb-3">
                <input type="text" class="form-control form-control-sm shadow-none" id="keyword" placeholder="keyword">
            </div>
            <h3>Status</h3>
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
            <h3>Project Owner</h3>
            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input shadow-none" type="radio" name="owner" id="owner">
                    <label class="form-check-label" for="owner">
                        All project
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input shadow-none" type="radio" name="owner" id="owner2">
                    <label class="form-check-label" for="owner2">
                        Invited Project
                    </label>
                </div>
            </div>
            <div>
                <input class="btn btn-sm btn-primary" type="submit" value="Submit">
            </div>
        </form>


    </div>
</div>
@endsection