@extends('layouts.auth')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card bg-white shadow-sm">
                <div class="card-body border-top border-3 border-dark">

                    <form method="POST" action="{{ route('register') }}" class="p-2 mt-md-2">
                        @csrf
                        <img src="{{ asset('pmb.svg') }}" alt="pmb" class="mx-auto d-block mb-2">

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>

                            <input id="name" type="text"
                                class="form-control form-control-sm @error('name') is-invalid @enderror" name="name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror

                        </div>


                        {{-- <div class="mb-3">
                            <label for="email" class="form-label ">{{ __('Email Address')}}</label>
                            <input id="email" type="email"
                                class="form-control form-control-sm @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror
                        </div> --}}


                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address')
                                }}</label>

                            <input id="email" type="email"
                                class="form-control form-control-sm @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password')
                                }}</label>

                            <input id="password" type="password"
                                class="form-control form-control-sm @error('password') is-invalid @enderror"
                                name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                            @enderror

                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm
                                Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control form-control-sm"
                                name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-sm btn-dark">
                                {{ __('Register') }}
                            </button>
                        </div>
                        <div class="form-label mt-2 mb-0 p-0">
                            <p class="mb-0 small">Have an account? <a href="{{ route('login') }}"
                                    class="text-secondary fw-bold">Login</a></p>
                            <p class="p-0 small">back <a href="{{ url('/') }}" class="text-secondary"></i>Home</a>
                            </p>

                        </div>
                    </form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection