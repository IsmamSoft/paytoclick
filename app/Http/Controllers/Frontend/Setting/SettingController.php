<?php

namespace App\Http\Controllers\Frontend\Setting;

use App\Http\Controllers\Controller;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use Image;


class SettingController extends Controller
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

    // function setting(){

    // }


    function setting($name){

        $user = User::where('name', $name)->get();
        return view('frontend.profile.setting.general', compact('user'));
    }

    function contact($name){
        $user = User::where('name', $name)->get();
        return view('frontend.profile.setting.contact', compact('user'));
    }

    function names(Request $request, $id){

        $user = User::find($id);

        $user->name = $request->name;
        $user->f_name = $request->f_name;
        $user->l_name = $request->l_name;

        $user->save();

        return back()->with('success', 'User successfully changed!');

    }
    
    
        function email(Request $request, $id){

        $user = User::find($id);

        $user->email = $request->email;

        $user->save();

        return back()->with('success', 'Email successfully changed!');

    }

    function view_pass(){
               
        return view('frontend.profile.setting.password');
    }

    function changePassword(Request $request)
    {
        $request->validate([
          'current_password' => 'required',
          'password' => 'required|string|min:6|confirmed',
          'password_confirmation' => 'required',
        ]);

        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'Current password does not match!');
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Password successfully changed!');
    }


}
