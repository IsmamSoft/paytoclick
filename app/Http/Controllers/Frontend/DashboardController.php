<?php

namespace App\Http\Controllers\Frontend;

use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;


class DashboardController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    function dashboard($name){
        $user = User::where('user_name', $name)->get();
        return view('frontend.dashboard.dashboard', compact('user'));
    }
}
