<?php

namespace App\Http\Controllers\SMS;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Contact;
use App\User;
use Nexmo;
class SMSController extends Controller
{
    public function create()
    {
        return view('frontend.profile.setting.contact');
    }
    public function store(Request $req, $id)
    {
        $code=rand(1111,9999);

        $user=Contact::find($id);
        $user->phone=$req->phone;
        $user->code=$code;
        $user->save();

        $nexmo=app('Nexmo\Client');
        $nexmo->message()->send([
            'to'=>'+880'.(int) $req->phone,
            'from'=> "People's Work Admin",
            'text'=>'Verify code: '.$code,
        ]);

        return redirect('/verify');

    }

    public function GetVerify()
    {
         return view('auth.verify');
    }
    public function PostVerify(Request $req)
    {
         $check=Contact::where('code',$req->code)->first();
         if( $check){
             $check->code=Null;
             $check->save();
             return redirect('/');
         }else{
             return back()->withMessage('Verify code is not correct');
         }
    }
}
