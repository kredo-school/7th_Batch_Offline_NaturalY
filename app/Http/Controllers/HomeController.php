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

    public function registerRole()
    {
        return view('auth.register_role');
    }

    public function registerConsumer()
    {
        return view('auth.register_consumer');
    }

    public function registerFarm()
    {
        return view('auth.register_farm');
    }
    public function registerHome()
    {
        return view('home');
    }
    public function allitems()
    {
        return view('allitems');
    }
}
