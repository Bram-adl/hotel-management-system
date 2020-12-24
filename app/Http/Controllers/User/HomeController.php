<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Get the home page.
     * 
     * @return view
     */
    public function index()
    {
        return view('user.home');
    }
}
