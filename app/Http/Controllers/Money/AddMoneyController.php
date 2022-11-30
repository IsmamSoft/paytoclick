<?php

namespace App\Http\Controllers\Money;

use App\Http\Controllers\Controller;
use App\Statement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Wallet;
use App\User;

class AddMoneyController extends Controller
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

    function addmoney(Request $request, $id){

        $amount = '';
         if(Auth::user()->package=='play'){
           $amount = "2";
        }
        elseif(Auth::user()->package=='silver'){
           $amount = '5';
        }
        elseif(Auth::user()->package=='gold'){
           $amount = '11';
        }
        elseif(Auth::user()->package=='diamond'){
           $amount = '11';
        }
        elseif(Auth::user()->package=='vip'){
           $amount = '23';
        }

        // // $money = Wallet::find($id);
        // $money = new Wallet;

        // $money->wallet_amount = $amount;

        // $request->user()->wallet()->save($money);


        $user = User::find(Auth::user()->id);
        $oldbalance  = $user->balance;


        $newbalance = $oldbalance + $amount;

        $user->balance = $newbalance;

        $statement = new Statement();
        $statement->tnx_id = uniqid();
        $statement->tnx_type = 'Earning';
        $statement->remarks = $request->remarks;
        $statement->credit = $amount;
        $statement->remain_balance = $newbalance;

        $user->save();
        $request->user()->statement()->save($statement);


        return back()->with('success', 'You have earned');


    }
}
