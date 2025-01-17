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
        $user = Auth::user();
    
        $farms = User::where('role_id', 3)
            ->withCount('followers')
            ->orderBy('followers_count', 'desc')
            ->paginate(10);
    
        $items = Item::withTrashed()->where('user_id', $user->id)->get();
    
        return view('farm.index', compact('user', 'farms', 'items'));
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

    public function editItem($item_id)
    {   
        $user = Auth::user();
        $item = Item::withTrashed()->findOrFail($item_id);
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
    
    public function toggleVisibility($item_id)
    {
        $item = Item::withTrashed()
            ->where('id', $item_id)
            ->where('user_id', auth()->id())
            ->firstOrFail();
    
        if ($item->trashed()) {
            $item->restore(); 
        } else {
            $item->delete(); 
        }
    
        return redirect()->route('farm.index');
    }

    public function deleteItem($item_id)
    {
        $item = Item::withTrashed() 
            ->where('id', $item_id)
            ->where('user_id', auth()->id())
            ->firstOrFail();
    
        $item->forceDelete(); 
    
        return redirect()->route('farm.index')->with('status', 'Item permanently deleted.');
    }    

    // Pending Methods
    public function analysis()
    {
        return view('farm-analysis');
    }

}
