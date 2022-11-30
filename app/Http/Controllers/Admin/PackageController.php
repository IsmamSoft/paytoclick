<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\buyPackage;
use App\Notify;
use App\Package;
use App\User;
use Auth;
class PackageController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    }

    function view_req(){
        // $buypack = buyPackage::orderBy('id', 'DESC')->get();;
        return view('admin.package.request');
        // return view('admin.package.request', compact('buypack'));
    }

    function approval($name){
        $user = User::where('name', $name)->get();
        return view('admin.package.single',compact('user'));
    }

    function update_user(Request $request, $id){

        $user = User::find($id);

        $user->verified = $request->verified;
        $user->package  = $request->package;

        $user->save();

        return redirect()->back();
        // view('admin.package.request');

    }



    function single_view(Request $request, $id){

        $message = new Notify;

        $message->email = $request->email;
        $message->message = 'Enjoy and Earn!';

        $request->user()->notify()->save($message);

        return back()->with('success', 'Done');

    }

    public function package_approve(Request $request,$id)
    {
         $package_request = buyPackage::find($id);
         $package_request->status = 'approved';
         $name = $package_request->package;
         $id = $package_request->user_id;

         $user_package = new Package();
         $user_package->user_id = $id;
         $user_package->package_name = $name;
         $user_package->status = 'active';


         $message = new Notify;
         $message->user_id = $id;
         $message->email = $request->email;
         $message->status = 'active';
         $message->message = 'Your Request For '.$package_request->package.' Package Hasbeen Approved';

         $package_request->save();
         $user_package->save();
         $message->save();


        //  $request->user()->user_package()->save($user_package);
        //  $request->user()->package()->save($package_request);
        //  $request->user()->notify()->save($message);

         return back()->with('success', 'Approved');
    }
}
