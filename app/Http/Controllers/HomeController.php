<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $auctions = Auction::where('end_time', '>', DB::raw('now()'))->get();
        return view('sections.home', ['auctions' => $auctions]);
    }

    public function showSearchBar()
    {
        $categories = Category::all();
        return view('components.search_bar', ['categories' => $categories]);
    }
}
