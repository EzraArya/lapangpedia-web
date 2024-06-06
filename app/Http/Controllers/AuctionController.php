<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuctionController extends Controller
{
    public function search(Request $request)
    {
        $category_id = $request->input('category_id');
        $product_name = $request->input('product_name');
    
        $auctions = Auction::whereHas('product', function ($query) use ($category_id, $product_name) {
            $query->where('name', 'like', '%' . $product_name . '%')
                  ->whereHas('category', function ($query) use ($category_id) {
                      $query->where('id', $category_id);
                  });
        })->get();
    
    
        return view('sections.Products.product-list', ['auctions' => $auctions]);
    }
    public function buyoutProduct(Request $request, Auction $auction){
        $request->validate([
            'agree' => 'required',
        ]);
        if ($auction->auction_status == "ongoing") {
            // return redirect()->route('home-page');
            $auction->auction_status = 'ended';
            $auction->winner_id = Auth::id();
            $auction->save();
    
            return redirect()->back()->with('success', 'The product has been bought out successfully!');
        }
    
        return redirect()->withErrors([
            'agree.reqired' => 'You must agree to the terms and conditions.'
        ]);
    }

    public function endAuctionByTime(Auction $auction){
        if (now() > $auction->end_time) {
            $auction->auction_status = 'ended';
            $auction->winner_id = $auction->highestBid();
            $auction->save();
    
            return redirect()->back()->with('success', 'The auction has ended due to time expiry.');
        }
    
        return redirect()->back()->with('error', 'The auction is still ongoing.');
    }

}