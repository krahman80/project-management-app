@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col s12 m8 l4 offset-m2 offset-l4" style="margin-top: 40px;">
        <div class="card">
            <div class="card-action blue-grey darken-1 white-text center">
                <h4>Project Man</h4>
            </div>
            <div class="card-content">
                <span class="card-title black-text">Register</span>
                <form>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Name" id="name" type="text" class="validate" required="">
                            <label for="name" class="active">Name</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Email" id="email" type="email" class="validate">
                            <label for="email" class="active">Email</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Password" id="password" type="password" class="validate" required>
                            <label for="password" class="active">Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input placeholder="Retype password" id="password-confirm" type="password" class="validate">
                            <label for="password-confirm" class="active">Confirm Password</label>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-action">
                <input type="submit" class="btn" value="Register">
            </div>
        </div>
    </div>
</div>
@endsection