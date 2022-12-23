@extends('auth.layouts.app')

@section('content')
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <img class="brand-img" src="{{ asset('assets/images/logo.png') }}" alt="...">
                <h2 class="brand-text">Confirm Password</h2>
            </div>
            <p>Please confirm your password before continuing</p>

            <form method="post" role="form" action="{{ route('password.confirm') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Confirm Password</button>
                @if (Route::has('password.request'))
                    <a class="btn btn-primary btn-block" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>

            <!-- Page -->
        @endsection
