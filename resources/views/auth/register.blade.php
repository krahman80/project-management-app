@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col s12 m8 l4 offset-m2 offset-l4" style="margin-top: 40px;">
        <div class="card">
            <div class="card-action blue-grey darken-1 white-text center">
                <h4>Project Man</h4>
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="card-content">
                    <span class="card-title black-text">Register</span>

                    <div class="row">
                        <div class="input-field col s12">
                            <input id="name" type="text" name="name" class="validate @error('name') invalid @enderror"
                                required>
                            <label for="name" class="active">{{ __('Name') }}</label>
                            @error('name')
                            <span class="helper-text red-text">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="email" type="email" name="email"
                                class="validate @error('email') invalid @enderror" value="{{ old('email') }}" required
                                autocomplete="email">
                            <label for="email" class="active">{{ __('Email Address') }}</label>
                            @error('email')
                            <span class="helper-text red-text">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password" type="password" class="validate" name="password" required
                                autocomplete="new-password">
                            <label for="password" class="active">{{ __('Password') }}</label>
                            @error('password')
                            <span class="helper-text red-text">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="password-confirm" type="password" class="validate" name="password_confirmation"
                                required autocomplete="new-password">
                            <label for="password-confirm" class="active">{{ __('Confirm Password') }}</label>
                        </div>
                    </div>
                </div>
                <div class="card-action">
                    <button type="submit" class="btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection