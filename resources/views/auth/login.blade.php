@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col s12 m8 l4 offset-m2 offset-l4" style="margin-top: 60px;">
        <div class="card">
            <div class="card-action blue-grey darken-1 white-text center">
                <h4>Project Man</h4>
            </div>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-content">
                    <span class="card-title black-text">Sign In</span>

                    <div class="row">
                        <div class="input-field col s12">
                            <input name="email" id="email" type="email"
                                class="validate @error('email') invalid @enderror" value="{{ old('email') }}" required
                                autocomplete="email" autofocus>
                            <label for="email" class="active">{{ __('Email Address') }}</label>

                            @error('email')
                            <span class="helper-text red-text">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input name="password" id="password" type="password"
                                class="validate @error('password') invalid @enderror" required
                                autocomplete="current-password">
                            <label for="password" class="active">{{ __('Password') }}</label>

                            @error('password')
                            <span class="helper-text red-text">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <label for="remember">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                        <span>{{ __('Remember Me') }}</span>
                    </label>
                </div>
                <div class="card-action">

                    <button type="submit" class="btn left">
                        {{ __('Login') }}
                    </button>
                    @if (Route::has('password.request'))
                    <a class="right" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    @endif
                    <div style="clear: both;"></div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection