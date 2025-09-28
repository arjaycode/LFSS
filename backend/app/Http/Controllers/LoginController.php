<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    function login(Request $request){
        $credentials = $request->validate([
            'school_id' => 'required|string|max:20',
            'email'     => 'required|email',
            'password'  => 'required|string|min:8',
        ]);

        if (Auth::attempt([
            'school_id' => $credentials['school_id'],
            'email'     => $credentials['email'],
            'password'  => $credentials['password'],
            'is_active' => true, // only allow active users
        ])) {
            // $request->session()->regenerate(); // prevent session fixation
            // return redirect()->intended('dashboard'); // or your home route
            return redirect()->route('user.dashboard');
        }

        return back()->withErrors([
            'login_error' => 'Invalid School ID, Email, or Password.',
        ])->onlyInput('school_id', 'email');
    }
}
