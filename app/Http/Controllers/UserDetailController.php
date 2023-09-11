<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Auth;


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

    public function getUserDetails(Request $request)
    {
        // Assuming you have a UserDetail model with 'first_name' and 'last_name' columns
        $userDetails = UserDetail::select(['id', 'user_id', 'first_name', 'last_name'])
            ->with('user') // Assuming you have a 'user' relationship in UserDetail model
            ->get();

        // Calculate the full name for each user
        $userDetails->each(function ($userDetail) {
            $userDetail->full_name = $userDetail->first_name . ' ' . $userDetail->last_name;
        });

        return response()->json(['userDetails' => $userDetails]);
    }
}
