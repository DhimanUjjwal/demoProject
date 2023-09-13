<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Services\Login\RememberMeExpiration;

class AdminLoginController extends Controller
{
    use RememberMeExpiration;

    /**
     * Display login page.
     * 
     * @return Renderable
     */
    public function show()
    {
        return view('admin.auth.login');
    }

    /**
     * Handle account login request
     * 
     * @param LoginRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function login(LoginRequest $request)
    {

        $credentials = $request->getCredentials();

        if (!auth()->guard('admin')->attempt($credentials) || auth()->attempt($credentials)){
            return redirect()->to('admin/login')
                ->withErrors(trans('auth.failed'));
        }
        else{
            $admin = auth()->guard('admin')->user();
    
            if ($request->filled('remember')) {
                $this->setRememberMeExpiration($admin);
            }
        
            return $this->authenticated($request, $admin);
        }
    
        
    }

    /**
     * Handle response after admin authenticated
     * 
     * @param Request $request
     * @param Auth $admin
     * 
     * @return \Illuminate\Http\Response
     */
    protected function authenticated(Request $request, $admin) 
    {
        return redirect()->to('/admin');
    }
}
