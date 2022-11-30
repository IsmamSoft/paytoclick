<?php

namespace App\Http\Controllers\Earn;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EarningController extends Controller
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

    function earn(){
        return view('frontend.earn.earn');
    }

    public function earn_cash_transfer()
    {
        return view('frontend.earn.earn_cash_transfer');
    }

    public function earn_cash_convert()
    {
        return view('frontend.earn.convert');
    }
}
