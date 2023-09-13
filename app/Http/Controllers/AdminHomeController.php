<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminHomeController extends Controller
{
    public function index() 
    {
        $users = User::join('user_details', 'users.id', '=', 'user_details.user_id')
        ->select('users.email', 'user_details.address', 'users.status','user_details.first_name', 'user_details.last_name') 
        ->paginate(10); 
        return view('admin.home.index',['users' => $users]);
    }
}
