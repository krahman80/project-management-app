@extends('layouts.app')

@section('content')
<div class="container my-5 h-100">
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-md-3">
            <div class="card">
                <div class="card-header text-center">{{ __('Login') }}</div>
                <div class="card-body">
                    <form class="mx-2 my-2" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                        <input type="email" name="email" class="form-control form-control-sm @error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <div id="emailFeedback" class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('Password') }}</label>
                        <input type="password" class="form-control form-control-sm @error('password') is-invalid @enderror" id="password" name="password" required autocomplete="current-password">
                        @error('password')
                            <div id="passwordFeedback" class="invalid-Feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">{{ __('Remember Me') }}</label>
                    </div>
                    <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-sm btn-primary text-white">{{ __('Login') }}</button>
                    </div>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
