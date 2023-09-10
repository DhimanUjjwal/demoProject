<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;
use Auth;

class UserDetailController extends Controller
{
    public function showForm()
    {
        return view('user_details.form');
    }

    public function store(Request $request)
    {
        $user = Auth::user();
       

        $userDetail = new UserDetail([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'address' => $request->input('address'),
        ]);

        $user->userDetail()->save($userDetail);

        return redirect()->route('home.index')->with('success', 'User details saved successfully.');
    }
}
