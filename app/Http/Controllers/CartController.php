<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function index(){
        $bids = DB::table('bids')
                    ->select('auction_id', DB::raw('MAX(id) as id'))
                    ->where('user_id', Auth::id())
                    ->groupBy('auction_id')
                    ->get()
                    ->map(function ($bid) {
                        return Bid::where('id', $bid->id)->with('auction.product')->first();
                    });
    
        return view('sections.Transactions.cart', ["bids" => $bids]);
    }
}
