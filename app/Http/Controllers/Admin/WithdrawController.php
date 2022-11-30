<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\WithdrawRequest;
use App\User;
class WithdrawController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    } 
    
    function withdraw(){

        $amount = WithdrawRequest::orderBy('id', 'DESC')->get();
        return view('admin.withdraw.withdraw', compact('amount'));
    }
}
