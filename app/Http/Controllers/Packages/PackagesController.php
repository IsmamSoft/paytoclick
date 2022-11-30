<?php

namespace App\Http\Controllers\Packages;

use RealRashid\SweetAlert\Facades\Alert;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\buyPackage;
use App\Notification;
use App\Notify;
use PhpParser\Node\Expr\New_;

class PackagesController extends Controller
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

    function play(){
        return view('frontend.package.buy');
    }

    // function sliver(){
    //     return view('frontend.package.buy');
    // }

    // function gold(){
    //     return view('frontend.package.buy');
    // }

    // function diamond(){
    //     return view('frontend.package.buy');
    // }

    // function vip(){
    //     return view('frontend.package.buy');
    // }

    function buy_package(Request $request){

        $buy = new buyPackage;

        $buy->quote = "Quote:".Auth::user()->name .rand(11111,99999).uniqid();
        $buy->name = $request->name;
        $buy->email = $request->email;
        $buy->package = $request->package;
        $buy->oparetor = $request->oparetor;
        $buy->number = $request->number;



        $notify = new Notify();
        $notify->email = Auth::user()->email;
        $notify->message = ' Your Package Requesting '.$buy->package.' Is Pending..';
        $notify->status = 'active';

        $request->user()->package()->save($buy);
        $request->user()->notify()->save($notify);

        return back()->with('success', 'Package Request Successful');

    }

}
