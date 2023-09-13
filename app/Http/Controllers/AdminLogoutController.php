<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLogoutController extends Controller
{
    /**
     * Log out account admin.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function perform()
    {
       Auth::guard('admin')->logout();

       Session::flush();

       return redirect('/admin');
    }
}
