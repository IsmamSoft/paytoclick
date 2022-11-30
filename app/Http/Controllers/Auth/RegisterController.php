<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\User;
// use Image;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = "/dashboard/{name}";

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        return Validator::make($data, [
            'name'       => [ 'string', 'max:255'],
            'user_name'  => ['required','unique:users'],
            'phone' => ['required'],
            'email'      => ['required', 'string', 'email', 'max:255' ],
            'password'   => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        // $unique = rand(1111,9999).uniqid();

        return User::create([
            'reffer_code'  => $data['reffer_code'],
            'refer_by'  => $data['refer_by'],
            'name'         => $data['name'],
            'user_name' => $data['user_name'],
            'phone' => $data['phone'],
            'email'        => $data['email'],
            'password'     => Hash::make($data['password']),
        ]);
    }
}
