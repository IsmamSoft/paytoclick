<?php

namespace App\Http\Controllers\Withdraw;

use App\Http\Controllers\Controller;
use App\Statement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\WithdrawRequest;
use App\Wallet;
use App\User;

class WithdrawController extends Controller
{
    function view_page(){
        return view('frontend.withdraw.withdraw');
    }

    function withdraw(Request $request){

        if(Wallet::where('user_id', auth()->id())->get()){
            if(Auth::user()->balance >= $request->wallet_amount)
            {
                    $balance = Auth::user()->balance;
                    $newbalance = $balance - $request->wallet_amount;

                    $user = User::find(Auth::user()->id);
                    $user->balance = $newbalance;


                    $post = new WithdrawRequest;

                    $post->name = Auth::user()->name;
                    $post->email = Auth::user()->email;
                    $post->mobile = $request->mobile;
                    $post->oparetor = $request->oparetor;
                    $post->wallet_amount = $request->wallet_amount;

                    $statement = new Statement();
                    $statement->tnx_id = uniqid();
                    $statement->tnx_type = 'Withdraw Request';
                    //$statement->remarks = $request->remarks;
                    $statement->credit = $request->wallet_amount;
                    $statement->remain_balance = $newbalance;

                    $request->user()->statement()->save($statement);

                    $request->user()->withdraw()->save($post);
                    $user->save();
                    return back()->with('message', 'Successfully Send Withdraw Request');
            }
            else
            {

                    return back()->with('error','Insufficent Balance');

            }

        }
        else {
            return back()->with('error','Something Went Wrong');
        }
    }
}
