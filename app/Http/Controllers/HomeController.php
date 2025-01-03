<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;

class HomeController extends Controller
{   
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    private $user;
    private $item;
    public function __construct(User $user, Item $item)
    {
        $this->middleware('auth');
        $user = $user;
        $this->item=$item; 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function getFarms()
    {
        return User::where('role_id', 3)->orderBy('created_at', 'desc');
    }
    public function getItems()
    {
        return Item::orderBy('created_at', 'desc');
    }

    // Home Page
    public function index()
    {   
        $user = Auth::user();
        $items = $this->getItems()->take(8)->get();
        $farms = $this->getFarms()->take(4)->get();
    
        return $this->redirectBasedOnRole($user, $items, $farms);
    }

    public function allItems()
    {   
        $items = $this->getItems()->paginate(8);
        return view('all-items', compact('items'));
    }

    public function allFarms()
    {   
        $farms = $this->getFarms()->paginate(4); 
        return view('all-farms', compact('farms'));
    }
    
    // Register
    public function storeRole()
    {
        return view('auth.register-consumer');
    }

    public function registerFarm()
    {
        return view('auth.register-farm');
    }

    public function registerHome()
    {
        return view('home');
    }

    
    public function showItem()
    {   
        $reviews = [
            [
                'username' => 'Sasaki Ryosuke',
                'rating' => 4.5,
                'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'date' => '12/24/2024',
            ],
        ];
        return view('show-item', compact('reviews'));
    }
    public function cart()
    {   
        $cartItems = [
            [
                'image' => '/storage/images/banana.jpg',
                'favorites' => 10,
                'title' => 'Good Banana',
                'category' => 'Cucumber',
                'description' => 'Lorem ipsum dolor sit amet...',
                'details' => 'Vero eaque nesciunt praesentium...',
                'price' => 3.99,
                'farm_image' => '/storage/images/topbanner.jpg',
                'farm_name' => 'Farm Name',
                'quantity' => 3,
            ],
        ];
        return view('consumer.cart', compact('cartItems'));
    }
    public function order()
    {
        return view('consumer.order');
    }
    public function orderConfirm()
    {
        return view('consumer.order-confirm');
    }
    public function orderSuccess()
    {
        return view('consumer.order-success');
    }
    public function favorites()
    {   
        $items = $this->getItems(); 
        return view('consumer.favorites', compact('items'));
    }
    public function followings()
    {   
        $farms = $this->getfarms(); 
        return view('consumer.followings', compact('farms'));
    }
    public function purchaseHistory()
    {
        return view('consumer.purchase-history');
    }
    public function review()
    {   
        return view('consumer.review');
    }

    public function farmProfile()
    {   
        $items = $this->getItems(); 
        return view('farm-profile', compact('items'));
    }
}
