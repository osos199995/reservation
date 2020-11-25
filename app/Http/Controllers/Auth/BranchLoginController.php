<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BranchLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:branch')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.branch-login');
    }

    public function login(Request $request)
    {
        // Validate form data
//        $this->validate($request, [
//            'email' => 'required|email',
//            'password' => 'required|min:8'
//        ]);

        // Attempt to log the user in
        if(Auth::guard('branch')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
//            dd(Auth::guard('branch'));
            return redirect()->intended(route('branch.dashboard'));
        }

        // if unsuccessful
        return redirect()->back()->withInput($request->only('email','remember'));
    }
}
