<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Initialize the class constructor.
     * 
     * @return void
     */
    public function __construct()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
    }
    
    /**
     * Get the login page.
     * 
     * @return View
     */
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }
        
        return view('auth.login');
    }

    /**
     * Authenticates the user.
     * 
     * @return redirect
     */
    public function login(Request $request)
    {
        $credentials = $request->only(['email_address', 'password']);

        if (Auth::attempt($credentials)) {
            // Authentiaction passed ...
            return redirect()->intended('dashboard')->with('status', 'Welcome back, ' . Auth::user()->username);
        }
    }
}
