<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Support\Facades\Auth;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo;
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        if (Auth::check() && Auth::user()->role_id == 1) {
            return redirect()->route('superadmin.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 2) {
            return redirect()->route('admin.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 3) {
            return redirect()->route('hr.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 4) {
            return redirect()->route('finance.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 5) {
            return redirect()->route('manager.dashboard');
        } elseif (Auth::check() && Auth::user()->role_id == 6) {
            return redirect()->route('employee.dashboard');
        } else {
            $this->middleware('guest')->except('logout');
        }
    }
}
