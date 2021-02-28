<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryCategory;
use App\Models\SecondaryCategory;
use App\Models\ItemCondition;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use App\Models\Item;

class SellController extends Controller
{
    public function showSellForm()
    {
        $categories = PrimaryCategory::query()
            ->with(['secondaryCategories'])
            ->get();
        $conditions = ItemCondition::get();

        return view('sell')->with(['categories' => $categories, 'conditions' => $conditions]);
    }

    public function sellItem(Request $request)
    {
        $user = Auth::user();

        $item = new Item();
        $item->seller_id = $user->id;
        $item->name = $request->name;
        $item->description = $request->description;
        $item->secondary_category_id = $request->category;
        $item->item_condition_id = $request->condition;
        $item->price = $request->price;

        if ($request->has('item-image')) {
            $file_name = Storage::putFile('public/item-images', $request->file('item-image'));
            $item->item_image = basename($file_name);
        }

        $item->save();

        return redirect()->back()->with('status', '商品を出品しました');
    }
}
