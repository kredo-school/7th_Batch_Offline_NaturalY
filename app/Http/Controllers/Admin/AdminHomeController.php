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

    public function farmManagement()
    {
        return view('admin.farm-management');
    }
}
