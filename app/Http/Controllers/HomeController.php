<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index() 
    {
        $user = Auth::user();

        if (!$user) {
            return view('home.index');
        } else if($user && !$user->userDetail) {
            return view('home.UserDetails');
        }else{
            return view('home.index');
        }
    }
}
