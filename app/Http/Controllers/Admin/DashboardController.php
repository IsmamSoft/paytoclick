<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class DashboardController extends Controller
{
    function index(){
        return view('admin.dashboard.dashboard');
    }
}
