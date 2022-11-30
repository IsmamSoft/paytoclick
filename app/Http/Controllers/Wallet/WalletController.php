<?php

namespace App\Http\Controllers\Wallet;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\WithdrawRequest;
use App\Wallet;
use App\User;

class WalletController extends Controller
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

    function wallet(){
        
        $wallet = Wallet::where('user_id', auth()->id())->get();
        return view('frontend.wallet.wallet', compact('wallet'));
    }

    function request(Request $request){
        
        // $user = User::where('email', '=', $email)->first();

        $withdraw = new WithdrawRequest; 

        $withdraw->mobile = $request->mobile;
        $withdraw->oparetor = $request->oparetor;

        $request->user()->withdraw()->save($withdraw);

        return redirect()->back()->with('message', 'Your Request is in Process');

    }

   
}
