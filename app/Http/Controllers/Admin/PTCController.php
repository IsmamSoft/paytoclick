<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\PTCVideo;
use Storage;

class PTCController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
    } 

    function index(){
        return view('admin.ptcvideo.video');
    }

    function uploadVideo(Request $request)
    {
     
    $video = new PTCVideo;
    if ($request->hasFile('video'))
    {
    $path = $request->file('video')->store('videos', ['disk' =>'my_files']);
    $video->video = $path;
    }
    $video->save();

    return back();
    
   }

}
