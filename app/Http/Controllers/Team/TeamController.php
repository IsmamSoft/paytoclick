<?php

namespace App\Http\Controllers\Team;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class TeamController extends Controller
{
    function view(){
        return view('frontend.team.team');
    }
}
