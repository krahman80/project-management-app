@extends('layouts.auth')
@section('content')
<div class="row">
    <div class="col s12 m8 l4 offset-m2 offset-l4" style="margin-top: 60px;">
        <div class="card">
            <div class="card-action blue-grey darken-1 white-text center">
                <h4>Project Man</h4>
            </div>

            <div class="card-content">
                <span class="card-title black-text">{{ __('Verify Your Email Address') }}</span>

                @if (session('resent'))
                <div class="alert card green lighten-4 green-text text-darken-4">
                    <div class="card-content">
                        <p><i class="material-icons">check_circle</i>{{ __('A fresh verification link has been sent to
                            your email address.') }}</p>
                    </div>
                </div>
                @endif

                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn">{{ __('click here to request
                        another') }}</button>.
                </form>

            </div>

        </div>
    </div>
</div>
@endsection