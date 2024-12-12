<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function consumerManagement()
    {
        return view('admin.consumer-management');
    }

    public function consumerProfile()
    {
        return view('admin.consumer-profile');
    }

    public function farmManagement()
    {
        return view('admin.farm-management');
    }

    public function farmProfile()
    {
        return view('admin.farm-profile');
    }

    public function itemManagement()
    {
        return view('admin.item-management');
    }

    public function showItem()
    {
        return view('admin.show-item');
    }
}
