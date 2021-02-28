<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PrimaryCategory;
use App\Models\SecondaryCategory;
use App\Models\ItemCondition;

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
}
