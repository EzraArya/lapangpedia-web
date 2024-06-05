<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuctionController extends Controller
{
    public function endAuction(Auction $auction)
    {
        if ($auction->status == 'ongoing' && ($auction->isBoughtOut() || $auction->hasTimeEnded())) {
            $auction->status = 'ended';
            $auction->save();
    
            return redirect()->back()->with('success', 'The auction has ended successfully!');
        }
    
        return redirect()->back()->with('error', 'The auction could not be ended.');
    }
}