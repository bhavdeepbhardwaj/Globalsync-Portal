<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
// use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo;
    // protected $redirectTo = RouteServiceProvider::HOME;


    public function showLoginForm()
    {
        return view('auth.login');
    }


    public function redirectTo()
    {
        if (Auth()->user()->role_id == 1) {
            return redirect()->route('superadmin.dashboard');
        } elseif (Auth()->user()->role_id == 2) {
            return redirect()->route('admin.dashboard');
        } elseif (Auth()->user()->role_id == 3) {
            return redirect()->route('hr.dashboard');
        } elseif (Auth()->user()->role_id == 4) {
            return redirect()->route('finance.dashboard');
        } elseif (Auth()->user()->role_id == 5) {
            return redirect()->route('manager.dashboard');
        } elseif (Auth()->user()->role_id == 6) {
            return redirect()->route('employee.dashboard');
        } elseif (Auth()->user()->role_id == 0) {
            return redirect()->route('demo.dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Either Email or Password is wrong');
        }
    }

    public function login(Request $request)
    {
        $input = $request->all();

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt(array('email' => $input['email'], 'password' => $input['password']))) {

            if (Auth()->user()->role_id == 1) {
                return redirect()->route('superadmin.dashboard');
            } elseif (Auth()->user()->role_id == 2) {
                return redirect()->route('admin.dashboard');
            } elseif (Auth()->user()->role_id == 3) {
                return redirect()->route('hr.dashboard');
            } elseif (Auth()->user()->role_id == 4) {
                return redirect()->route('finance.dashboard');
            } elseif (Auth()->user()->role_id == 5) {
                return redirect()->route('manager.dashboard');
            } elseif (Auth()->user()->role_id == 6 && Auth()->user()->emp_users == 1) {
                return redirect()->route('employee.dashboard');
            } elseif (Auth()->user()->role_id == 0) {
                return redirect()->route('demo.dashboard');
            } else {
                return redirect()->route('approval');
            }
        }
        return redirect()->route('login')->with(dd('Either Email or Password is wrong'));
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
