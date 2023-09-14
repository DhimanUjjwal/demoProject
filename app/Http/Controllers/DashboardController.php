<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('home.dashboard');
    }

    public function profileSetting(){
        return view('home.profilesetting');
    }

    public function about(){
        return view('home.about');
    }

    public function deposit(){
        return view('home.deposit');
    }

    public function orders(){
        return view('home.orders');
    }
}
