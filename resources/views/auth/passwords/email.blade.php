@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card bg-white shadow-sm">

                {{-- <div class="card-header">{{ __('Reset Password') }}</div> --}}

                <div class="card-body pb-4 border-top border-3 border-dark">

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <img src="{{ asset('pmb.svg') }}" alt="pmb" class="mx-auto d-block mb-2">

                        {{-- <div class="h4 border-top border-1 pt-3 mb-2">{{ __('Reset Password') }}</div> --}}

                        <div class="mb-3">
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Reset Password')}}</label>

                            <input id="email" type="email" placeholder="email address"
                                class="form-control form-control-sm @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>

                        <div class="row mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-sm btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>

                    <div>
                        @if (Route::has('password.request'))
                        <p class="mb-0 small">Have an accout? <a class="text-secondary fw-bold"
                                href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a></p>
                        @endif
                        <p class="mb-0 small">Back <a href="{{ url('/') }}" class="text-secondary fw-bold">Home</a></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection