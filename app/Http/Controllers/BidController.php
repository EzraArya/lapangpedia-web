<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;

class BidController extends Controller
{
    public function placeBid(Request $request, Auction $auction)
    {
        $request->validate([
            'price' => 'required|numeric|min:' . ($auction->highestBid->price ?? $auction->starting_price)
        ]);
    
        $bid = Bid::create([
            'price' => $request->price,
            'user_id' => auth()->id(),
            'auction_id' => $auction->id,
        ]);
    
        return redirect()->back()->with('success', 'Your bid has been placed successfully!');
    }
}
