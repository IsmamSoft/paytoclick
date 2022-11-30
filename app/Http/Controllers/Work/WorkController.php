<?php

namespace App\Http\Controllers\Work;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\PTCVideo;
use App\User;

class WorkController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function index($name){
    if(Auth::user()->package == 'play'){
        $videos = PTCVideo::paginate(2);
        return view('frontend.work.work', compact('videos'));
    }
    elseif(Auth::user()->package == 'silver'){
        $videos = PTCVideo::paginate(4);
        return view('frontend.work.work', compact('videos'));
    } 
    elseif(Auth::user()->package == 'gold'){
        $videos = PTCVideo::paginate(6);
        return view('frontend.work.work', compact('videos'));
    } 
    elseif(Auth::user()->package == 'diamond'){
        $videos = PTCVideo::paginate(10);
        return view('frontend.work.work', compact('videos'));
    }
    elseif(Auth::user()->package == 'vip'){
        $videos = PTCVideo::paginate(10);
        return view('frontend.work.work', compact('videos'));
    }
    else{
        return view('frontend.dashboard.dashboard');
    }  
}   

}
