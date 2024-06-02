<?php

namespace App\Http\Controllers;

use App\Models\Auction;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return response()->json(['categories' => $categories], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::create([
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'Category created successfully', 'category' => $category], 201);
    }

    public function showByCategory($categoryId)
    {
        $category = Category::find($categoryId);
    
        $auctions = Auction::join('products', 'auctions.product_id', '=', 'products.id')
            ->where('products.category_id', $category->id)
            ->select('*')
            ->get();
        $categories = Category::all();
        return view('sections.Products.product-list', ['auctions' => $auctions, 'categories' => $categories]);
    }

    public function filterByCategory(Request $request)
    {
        $categoryIds = $request->get('categories', []);
    
        if (empty($categoryIds)) {
            $auctions = collect();
        } else {
            $auctions = Auction::join('products', 'auctions.product_id', '=', 'products.id')
                ->whereIn('products.category_id', $categoryIds)
                ->select('*')
                ->get();
        }
    
        $categories = Category::all();
    
        return view('sections.Products.product-list', ['auctions' => $auctions, 'categories' => $categories]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('sections.Sellers.product-listing', ['categories' => $categories]);
    }

    public function show(Category $category)
    {
        $category->load('products');
        return response()->json(['category' => $category], 200);
    }

    public function products(Category $category)
    {
        $products = $category->products;
        return response()->json(['products' => $products], 200);
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|string|max:255',
        ]);

        $categories = Category::where('name', 'like', '%' . $request->query . '%')->get();

        return response()->json(['categories' => $categories], 200);
    }
}