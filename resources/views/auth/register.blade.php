@extends('auth.layouts.app')

@section('content')
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <img class="brand-img" src="{{ asset('assets/images/logo.png') }}" alt="...">
                <h2 class="brand-text">Remark</h2>
            </div>
            <p>Sign up to find interesting thing</p>

            <form method="post" role="form" autocomplete="off" action="{{ route('register') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="sr-only" for="inputName">Name</label>
                    <input type="text" class="form-control empty @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" id="inputName" placeholder="Name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" class="form-control empty @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" id="inputEmail" placeholder="Email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPassword">Password</label>
                    <input type="password" class="form-control empty @error('password') is-invalid @enderror"
                        name="password" id="inputPassword" autocomplete="new-password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPasswordCheck">Retype Password</label>
                    <input type="password" class="form-control empty" id="inputPasswordCheck" name="password_confirmation"
                        autocomplete="new-password" placeholder="Retype Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <p>Have account already? Please go to <a href="{{ route('login') }}">Sign In</a></p>

            <!-- Page -->
        @endsection
