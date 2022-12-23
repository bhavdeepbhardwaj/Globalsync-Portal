@extends('auth.layouts.app')

@section('content')
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <img class="brand-img" src="{{ asset('assets/images/logo.png') }}" alt="...">
                <h2 class="brand-text">Reset Password</h2>
            </div>
            {{-- <p>Sign up to find interesting thing</p> --}}

            <form method="post" role="form" autocomplete="off" action="{{ route('password.update') }}">
                <input type="hidden" name="token" value="{{ $token }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="sr-only" for="inputName">Email Address</label>
                    <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ $email ?? old('email') }}" id="inputName" placeholder="Name">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                        id="Pnputpassword" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPasswordCheck">Confirm Password</label>
                    <input type="password" class="form-control " id="inputPasswordCheck" name="password_confirmation"
                        autocomplete="new-password" placeholder="Confirm Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
            </form>

            <!-- Page -->
        @endsection
