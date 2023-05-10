@extends('layouts.app')

@section('content')

<h2 class="text-left my-5">Project List</h2>
<div class="row">
    <div class="col-sm-9">
        <div class="row row-cols-1">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header">Light card title</div>
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
    </div>
    <div class="col-sm-3 small">
        <h3>Sidebar</h3>
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