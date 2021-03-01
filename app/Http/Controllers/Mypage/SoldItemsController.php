<?php

namespace App\Http\Controllers\Mypage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SoldItemsController extends Controller
{
    public function showSoldItems()
    {
        $user = Auth::user();
        $sold_items = $user->items()->get();
        return view('mypage.sold-items')->with(['user' => $user, 'sold_items' => $sold_items]);
    }
}
