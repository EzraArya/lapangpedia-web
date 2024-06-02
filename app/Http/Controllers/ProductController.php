<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['products' => $products], 200);
    }

    public function createProduct(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'condition' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'bid' => 'required|numeric',
            'bin' => 'required|numeric',
            'start' => 'required|date',
            'end' => 'required|date|after:start',
            'image' => 'required|image',
        ]);
    
        DB::beginTransaction();
    
        try {
            $imagePath = $request->file('image')->store('products', 'public');

            $product = Product::create([
                'user_id' => Auth::id(),
                'name' => $request->name,
                'description' => $request->description,
                'quantity' => $request->quantity,
                'condition' => $request->condition,
                'category_id' => $request->category_id,
                'image' => $imagePath,
            ]);
    
            $auction = $this->createAuction($request, $product);
    
            DB::commit();
            session()->flash('message', 'Product and auction created successfully');
            return redirect()->route('home-page');
        } catch (\Exception $e) {
            DB::rollback();
        
            session()->flash('message', 'Failed to create product and auction: ' . $e->getMessage());
            return redirect()->back();
        
        }
    }
    
    private function createAuction(Request $request, Product $product)
    {
        return Auction::create([
            'product_id' => $product->id,
            'start_time' => $request->start,
            'end_time' => $request->end,
            'starting_price' => $request->bid,
            'buyout_price' => $request->bin,
        ]);
    }

    public function showProduct($id)
    {
        $auction = Auction::find($id);

        if (!$auction) {
            // Handle the case where the product was not found
            abort(404);
        }

        return view('sections.Products.product', ['auction' => $auction]);
    }

}
