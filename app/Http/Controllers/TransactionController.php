<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class TransactionController extends Controller
{
    public function index(){
        $auctions = Auction::where('winner_id', Auth::id())->get();

        return view('sections.Profiles.transaction-history', ['auctions' => $auctions]);
    }

    public function showProductTransaction($id){
        $auction = Auction::find($id);

        if (!$auction) {
            // Handle the case where the product was not found
            abort(404);
        }

        return view('sections.Transactions.payment', ['auction' => $auction]);
    }

    public function transactionPayment(Auction $auction){
        if ($auction->payment_status == "unpaid") {
            $auction->payment_status = 'paid';
            $auction->save();
    
            return redirect()->route('payment-success');
        }
    
        return redirect()->back();
    }
    
}
