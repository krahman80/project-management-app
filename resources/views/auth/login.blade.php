@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card bg-white shadow-sm">
                <div class="card-body pb-5 border-top border-3 border-dark">
                    <form method="POST" action="{{ route('login') }}" class="mb-3 p-2 mt-md-2">
                        @csrf
                        <img src="{{ asset('pmb.svg') }}" alt="pmb" class="mx-auto d-block mb-2">
                        <div class="mb-3">
                            <label for="email" class="form-label ">{{ __('Email Address')}}</label>
                            <input id="email" type="email"
                                class="form-control form-control-sm @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label ">{{ __('Password')}}</label>
                            <input id="password" type="password"
                                class="form-control form-control-sm @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <div class="form-label mb-0">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{
                                    old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>

                        {{-- <p class="small"><a class="text-secondary" href="forget-password.html">Forgot
                                password?</a></p> --}}
                        <div class="d-grid">
                            <button class="btn btn-sm btn-dark" type="submit">Login</button>
                        </div>

                        {{-- <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </div>
                        </div> --}}
                    </form>

                    <div>
                        @if (Route::has('password.request'))
                        <p class="mb-0 small"><a class="text-secondary fw-bold" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a></p>
                        @endif
                        <p class="mb-0 small">Don't have an account? <a href="{{ route('register') }}"
                                class="text-secondary fw-bold">Sign
                                Up</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection