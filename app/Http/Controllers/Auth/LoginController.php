<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
    protected $redirectTo = '/dashboard/{name}';
    // protected $redirectTo = '/dashboard/{name}';

    function redirectTo()
    {
    // if(Auth::user()->hasAnyRoles(['superadmin','admin','author'])){
    //     $this->redirectTo = route('admin.users.index');
    //     return $this->redirectTo;
    // }


    if(Auth::user()->hasRole('admin')){
        $this->redirectTo = route('admin.dashboard');
        return $this->redirectTo;
    }

    elseif(Auth::user()->hasRole('superadmin')){
        $this->redirectTo = route('superadmin.users.index');
        return $this->redirectTo;
    }
    else
    {
        $this->redirectTo = route('dashboard',['name' => Auth::user()->user_name]);
        return $this->redirectTo;
    }

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


}
