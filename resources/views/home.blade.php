@extends('layouts.app')

@section('content')


<div class="row mt-4">
    <div class="col-sm-9 mx-auto">
        <h3 class="text-center mt-5 mb-4">Dashboard</h3>
        <div class="row row-cols-1">
            <div class="col">
                <div class="card shadow-sm">
                    <div class="card-header">Card title</div>
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

</div>
@endsection