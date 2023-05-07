@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col s12 m8 l4 offset-m2 offset-l4" style="margin-top: 60px;">
        <div class="card">
            <div class="card-action blue-grey darken-1 white-text center">
                <h4>Project Man</h4>
            </div>

            <div class="card-content">
                <span class="card-title black-text">{{ __('Reset Password') }}</span>

                @if (session('status'))
                <div class="alert card green lighten-4 green-text text-darken-4">
                    <div class="card-content">
                        <p><i class="material-icons">check_circle</i>{{ session('status') }}</p>
                    </div>
                </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
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
                            <button type="submit" class="btn left">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </div>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>
@endsection