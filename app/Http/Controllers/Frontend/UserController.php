<?php

namespace App\Http\Controllers\Frontend;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Image;

class UserController extends Controller
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

    // public function profile()
    public function profile($name)
    {
        $user = User::where('user_name', $name)->get();
        // return view('frontend.profile');
        return view('frontend.profile.profile', compact('user'));
    }

    function update_avatar(Request $request){
        // User Upload Avatar
        if($request->hasFile('avatar')){
            $avatar =   $request->file('avatar');
            $filename = time() . '.' .$avatar->getClientOriginalExtension();
            Image::make($avatar)->save( public_path('/user/'. $filename) );
            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }
        return view('fontend.profile', array('user' => Auth::user()) );
    }



    // function view_pass(){

    //     return view('frontend.profile.setting.password');
    // }

    // function changePassword(Request $request)
    // {
    //     $request->validate([
    //       'current_password' => 'required',
    //       'password' => 'required|string|min:6|confirmed',
    //       'password_confirmation' => 'required',
    //     ]);

    //     $user = Auth::user();

    //     if (!Hash::check($request->current_password, $user->password)) {
    //         return back()->with('error', 'Current password does not match!');
    //     }

    //     $user->password = Hash::make($request->password);
    //     $user->save();

    //     return back()->with('success', 'Password successfully changed!');
    // }

    function status(Request $request){
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

        return response()->json(['success' => 'Status Successfully Update']);
    }
}
