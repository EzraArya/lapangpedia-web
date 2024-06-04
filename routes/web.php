<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect(route('home-page'));
})->name('landing-page');
Route::get('/home', [HomeController::class, 'index'])->name('home-page');
Route::get('/product-list/{categories}', [CategoryController::class, 'showByCategory'])->name('product-list');
Route::get('/product-list/filter/{categories}', [CategoryController::class, 'filterByCategory'])->name('filter-list');
Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product-page');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login',[UserController::class, 'Login'])->name('login-page');
    Route::post('/login', [UserController::class, 'LoginPost'])->name('login');
    Route::get('/register',[UserController::class, 'Register'])->name('register-page');
    Route::post('/register',[UserController::class, 'RegisterPost'])->name('register');
    // Route::get('/login', function(){
    //     return view('sections.login');
    // })->name('login-page');
    // Route::get('/register', function(){
    //     return view('sections.register');
    // })->name('register-page');
    Route::get('/forgot-password', function(){
        return view('sections.forgot-password');
    })->name('forgot-password');
    Route::get('/forgot-success', function(){
        return view('sections.forgot-success');
    })->name('forgot-success');
    Route::get('/forgot-edit', function(){
        return view('sections.forgot-edit');
    })->name('forgot-edit');
});

Route::group(['middleware' => 'auth'], function(){
    Route::post('/auctions/{auction}/bids', [AuctionController::class, 'placeBid'])->name('bid-store');
    Route::get('profile-page', [UserController::class, 'index'])->name('profile-page');
    Route::post('/store-address', [UserController::class, 'storeAddress'])->name('store-address');
    Route::get('/transaction-history', function(){
        return view('sections.Profiles.transaction-history');
    })->name('transaction-history');
    Route::get('/seller-home', [ProductController::class, 'indexSeller'])->name('seller-home');
    // Route::get('/seller-home', function(){
    //     return view('sections.Sellers.home');
    // })->name('seller-home');
    // Route::get('/product-listing', function(){
    //     return view('sections.Sellers.product-listing');
    // })->name('create-product');
    Route::get('/create-product', [CategoryController::class, 'create'])->name('create-product');
    Route::post('/store-product', [ProductController::class, 'createProduct'])->name('store-product');
    Route::get('/cart', function(){
        return view('sections.Transactions.cart');
    })->name('cart');
    Route::get('/payment-method', function(){
        return view('sections.Transactions.payment');
    })->name('payment-page');
    Route::get('/payment-success', function(){
        return view('sections.Transactions.payment-complete');
    })->name('payment-success');
    Route::delete('/logout', [UserController::class, 'logout'])->name('logout');
});