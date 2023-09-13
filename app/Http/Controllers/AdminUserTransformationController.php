<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AdminUserTransformationController extends Controller
{
    public function updateStatus(Request $request)
    {
        if (!Auth::guard('admin')->check()) {
            return redirect()->route('admin.login');
        }

        $email = $request->query('email');

        $user = User::where('email', $email)->first();

        if (!$user) {
            return redirect()->back()->with('error', 'User not found.');
        }

        $user->status = $user->status === 1 ? 0 : 1 ;

        $user->save();

        return redirect()->back()->with('success', 'User status updated successfully.');
    }
}

