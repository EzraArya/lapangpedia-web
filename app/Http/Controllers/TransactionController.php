<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index(){
        $auctions = Auction::where('winner_id', Auth::id())->get();

        return view('sections.Profiles.transaction-history', ['auctions' => $auctions]);
    }

    
}
