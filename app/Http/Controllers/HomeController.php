<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
   
    public function Exc()
    {
        return view('ExC');
    }
    public function Expenses()
    {
        return view('expenses');
    }
    public function roles()
    {
        return view('roles');
    }
    public function users()
    {
      return view('users');
    }
}
