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

    public function allItems()
    {
        return view('all_items');
    }

    public function allFarms()
    {
        return view('all_farms');
    }

    public function farmProfile()
    {
        return view('farm_profile');
    }

    public function showItem()
    {
        return view('show_item');
    }
    public function cart()
    {
        return view('consumer.cart');
    }
    public function order()
    {
        return view('consumer.order');
    }
    public function orderConfirm()
    {
        return view('consumer.order_confirm');
    }
    public function orderSuccess()
    {
        return view('consumer.order_success');
    }
    public function favorites()
    {
        return view('consumer.favorites');
    }
    public function followings()
    {
        return view('consumer.followings');
    }
    public function purchaceHistory()
    {
        return view('consumer.purchace_history');
    }
    public function review()
    {
        return view('consumer.review');
    }
    public function profile()
    {
        return view('consumer.profile');
    }
    public function profileUpdate()
    {
        return view('consumer.profile_update');
    }
}
