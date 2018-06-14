<?php

namespace blog\Http\Controllers;

use Illuminate\Http\Request;
use blog\User;
use Auth; 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Auth::user()->roles; 
        if($roles == 'admin')
        {
            return view('home');
        }
        else
        {
            return redirect('/');
        }
        
    }
}
