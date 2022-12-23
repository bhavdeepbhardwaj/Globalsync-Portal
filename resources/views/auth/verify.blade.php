@extends('auth.layouts.app')

@section('content')
    <!-- Page -->
    <div class="page vertical-align text-center" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <div class="page-content vertical-align-middle">
            <div class="brand">
                <img class="brand-img" src="{{ asset('assets/images/logo.png') }}" alt="...">
                <h2 class="brand-text">Verify Your Email Address</h2>
            </div>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif
            <p>Before proceeding, please check your email for a verification link.</p>
            <p>If you did not receive the email</p>

            <form method="post" role="form" action="{{ route('verification.resend') }}">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-primary btn-block">click here to request another</button>
            </form>

            <!-- Page -->
        @endsection
