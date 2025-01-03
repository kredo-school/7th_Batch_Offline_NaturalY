<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // public function getItems()
    // {
    //     return [
    //         [
    //             'image' => '/storage/images/banana.jpg',
    //             'favorites' => 20,
    //             'title' => 'Good Banana',
    //             'category' => 'Banana',
    //             'description' => '10 Bananas',
    //             'price' => 15.99,
    //             'farm_image' => '/storage/images/topbanner.jpg',
    //             'farm_name' => 'Farm Name',
    //         ]
    //     ];
    // }

    public function redirectBasedOnRole($user, $items, $farms)
    {   
        switch ($user->role_id) {
            case 2:
                return view('home', compact('items', 'farms'))->with('user', $user);
            case 3:
                return view('farm.index', compact('items', 'farms'))->with('user', $user);
            default:
                return view('home', compact('items', 'farms'));
        }
    }

}

