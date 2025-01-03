<?php

namespace App\Http\Controllers\Farm;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Item;

class FarmController extends Controller
{   
    private $user;
    private $item;
    public function __construct(User $user, Item $item){ 
        $this->user=$user;  
        $this->item=$item;  
    }

    public function index()
    {   
        $user = $this->user->findOrFail(Auth::user()->id);
        $items = $user->with('items')->get();
        return view('farm.index')
            ->with('user', $user)
            ->with('items', $items);
    }

    public function createItem()
    {
        $user = Auth::user();
        $item = new Item(); 
        return view('farm.item-list', compact('user', 'item'));
    }
    
    public function storeItem(Request $request)
    {   
        $user = Auth::user();
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'contents' => 'required|string|max:20',
            'delivery_date' => 'required|in:short,middle,long',
            'picture_1' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:1024',
            'picture_2' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:1024',
            'picture_3' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:1024',
            'description' => 'nullable|string|max:1000',
        ]);

        $pictures = [];
        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile("picture_{$i}")) {
                $file = $request->file("picture_{$i}");
                $pictures["picture_{$i}"] = 'data:image/' . $file->extension() . ';base64,' . base64_encode(file_get_contents($file));
            } else {
                $pictures["picture_{$i}"] = null;
            }
        }

        $item = new Item();
        $item->user_id = $user->id;
        $item->name = $validated['name'];
        $item->category = $validated['category'];
        $item->price = $validated['price'];
        $item->contents = $validated['contents'];
        $item->delivery_date = $validated['delivery_date'];
        $item->picture_1 = $pictures['picture_1'] ?? null;
        $item->picture_2 = $pictures['picture_2'] ?? null;
        $item->picture_3 = $pictures['picture_3'] ?? null;
        $item->description = $validated['description'];
        
        $item->save();

        return redirect()->route('farm.index')->with('user', $user);
    }

    public function showItem($item_id)
    {   
        // tentative data
        $reviews = [
            [
                'username' => 'Sasaki Ryosuke',
                'rating' => 4.5,
                'comment' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.',
                'date' => '12/24/2024',
            ],
        ];

        $user = Auth::user();
        $item = $this->item->findOrFail($item_id);
        return view('farm.show-item', compact('item', 'user','reviews'));
    }

    public function editItem($item_id)
    {   
        $user = Auth::user();
        $item = $this->item->findOrFail($item_id);
        return view('farm.item-update', compact('item', 'user'));
    }

    public function updateItem(Request $request, $item_id)
    {   
        $user = Auth::user();
        $item = Item::findOrFail($item_id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'contents' => 'required|string|max:20',
            'delivery_date' => 'required|in:short,middle,long',
            'picture_1' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:1024',
            'picture_2' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:1024',
            'picture_3' => 'nullable|image|mimes:jpeg,jpg,png,gif|max:1024',
            'description' => 'nullable|string|max:1000',
        ]);

        $pictures = [];
        for ($i = 1; $i <= 3; $i++) {
            if ($request->hasFile("picture_{$i}")) {
                $file = $request->file("picture_{$i}");
                $pictures["picture_{$i}"] = 'data:image/' . $file->extension() . ';base64,' . base64_encode(file_get_contents($file));
            } else {
                $pictures["picture_{$i}"] = $item->{"picture_{$i}"};
            }
        }

        $item->user_id = $user->id;
        $item->name = $validated['name'];
        $item->category = $validated['category'];
        $item->price = $validated['price'];
        $item->contents = $validated['contents'];
        $item->delivery_date = $validated['delivery_date'];
        $item->picture_1 = $pictures['picture_1'] ?? null;
        $item->picture_2 = $pictures['picture_2'] ?? null;
        $item->picture_3 = $pictures['picture_3'] ?? null;
        $item->description = $validated['description'];
        
        $item->save();

        return redirect()->route('farm.index')->with('user', $user);
    }

    // Pending Methods
    public function orderMng()
    {   
        return view('farm.order-mng');
    }

    public function analysis()
    {
        return view('farm-analysis');
    }

}
