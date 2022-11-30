<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Notify;

class NotifyController extends Controller
{  
   /**
   * Create a new controller instance.
   * @return void
   */

   public function __construct()
   {
       $this->middleware('auth');
   }

   function announce(Request $request){

        $announce = new Notify;

        $announce->new_message = $request->new_message;
        $announce->package = $request->package;
        $announce->offer = $request->offer;
        $announce->name = $request->name;

        $announce->save();

   return back();
   }
    
}
 