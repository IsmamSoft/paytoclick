<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\ShopBalance;
use App\User;
use App\Wallet;

class ShopBalanceController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    } 

    function view_balance(){
        
    }
}
