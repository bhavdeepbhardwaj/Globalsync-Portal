@extends('auth.layouts.app')

@section('content')
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <img class="brand-img" src="{{ asset('assets/images/logo.png') }}" alt="...">
                <h2 class="brand-text">Reset Password</h2>
            </div>
            <p>Email Address</p>

            <form method="post" role="form" action="{{ route('password.email') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" id="inputEmail" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-block">Send Password Reset Link</button>
            </form>

            <!-- Page -->
        @endsection
