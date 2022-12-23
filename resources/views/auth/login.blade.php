@extends('auth.layouts.app')

@section('content')
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">>
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <img class="brand-img" src="{{ asset('assets/images/logo.png') }}" alt="...">
                <h2 class="brand-text">Remark</h2>
            </div>
            <p>Sign into your pages account</p>
            <form method="post" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label class="sr-only" for="inputEmail">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="inputEmail"
                        name="email" value="{{ old('email') }}" placeholder="Email">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="inputPassword">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="inputPassword"
                        name="password" placeholder="Password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group clearfix">
                    <div class="checkbox-custom checkbox-inline checkbox-primary float-left">
                        <input type="checkbox" id="inputCheckbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="inputCheckbox">Remember me</label>
                    </div>
                    <a class="float-right" href="{{ route('password.request') }}">Forgot password?</a>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>
            </form>
            <p>Still no account? Please go to <a href="{{ route('register') }}">Register</a></p>

            <!-- End Page -->
        @endsection
