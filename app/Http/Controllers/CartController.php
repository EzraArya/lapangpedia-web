<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index(){
        $bids = Bid::where('user_id', Auth::id())->with('auction.product')->get();
        return view('sections.Transactions.cart', ["bids" => $bids]);
    }
}
