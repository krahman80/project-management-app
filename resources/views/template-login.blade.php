@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col s12 m8 l4 offset-m2 offset-l4" style="margin-top: 60px;">
        <div class="card">
            <div class="card-action blue-grey darken-1 white-text center">
                <h4>Project Man</h4>
            </div>
            <div class="card-content">
                <span class="card-title black-text">Sign In</span>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Email" id="email" type="email" class="validate" required>
                            <label for="email" class="active">{{ __('Email Address') }}</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Password" id="lastname" type="password" class="validate">
                            <label for="password" class="active">Password</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-action">
                <input type="submit" class="btn" value="Sign In">
            </div>
        </div>
    </div>
</div>
@endsection