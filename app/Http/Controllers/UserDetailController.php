<?php

namespace App\Http\Controllers;

use App\Models\User;
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
        // Get the 'name' parameter from the query string
        $name = $request->query('query');
        
        if (!$name) {
            return response()->json(['error' => 'error_required']);
        }
        
        // Query the UserDetail model for records with a 'first_name' or 'last_name' containing the provided name
        $userDetails = UserDetail::select('user_details.first_name', 'user_details.last_name')
            ->where('first_name', 'LIKE', "%$name%")
            ->orWhere('last_name', 'LIKE', "%$name%")
            ->get();

        // Calculate the full name for each matching user
        $userDetails->each(function ($userDetail) {
            $userDetail->full_name = $userDetail->first_name . ' ' . $userDetail->last_name;
        });

        return response()->json(['userDetails' => $userDetails]);
    }


    public function index()
    {
        $users = User::join('user_details', 'users.id', '=', 'user_details.user_id')
            ->select('users.email', 'user_details.address', 'user_details.first_name', 'user_details.last_name') 
            ->get(); // Fetch all user details
        return view('home.listview', ['users' => $users]);
    }
}
