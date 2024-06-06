<?php

use App\Http\Controllers\AuctionController;
use App\Http\Controllers\BidController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect(route('home-page'));
})->name('landing-page');
Route::get('/home', [HomeController::class, 'index'])->name('home-page');
Route::get('/product-list/{categories}', [CategoryController::class, 'showByCategory'])->name('product-list');
Route::get('/product-list/filter/{categories}', [CategoryController::class, 'filterByCategory'])->name('filter-list');
Route::get('/product/{id}', [ProductController::class, 'showProduct'])->name('product-page');
Route::get('/search', [AuctionController::class, 'search'])->name('search');

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login',[UserController::class, 'Login'])->name('login-page');
    Route::post('/login', [UserController::class, 'LoginPost'])->name('login');
    Route::get('/register',[UserController::class, 'Register'])->name('register-page');
    Route::post('/register',[UserController::class, 'RegisterPost'])->name('register');
    Route::get('/forgot-password', function(){
        return view('sections.forgot-password');
    })->name('forgot-password');
    Route::post('/forgot-edit', [UserController::class, 'resetPassword'])->name('forgot-edit');
    Route::get('/forgot-success', function(){
        return view('sections.forgot-success');
    })->name('forgot-success');
});

Route::group(['middleware' => 'auth'], function(){
    Route::post('/auctions/{auction}/bids', [BidController::class, 'placeBid'])->name('bid-store');
    Route::post('/auctions/{auction}/buyout', [AuctionController::class, 'buyoutProduct'])->name('buyout-store');
    Route::get('profile-page', [UserController::class, 'index'])->name('profile-page');
    Route::post('/store-address', [UserController::class, 'storeAddress'])->name('store-address');
    Route::get('/transaction-history', [TransactionController::class, 'index'])->name('transaction-history');
    Route::get('/seller-home', [ProductController::class, 'indexSeller'])->name('seller-home');
    Route::get('/create-product', [CategoryController::class, 'create'])->name('create-product');
    Route::post('/store-product', [ProductController::class, 'createProduct'])->name('store-product');
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/payment-method/{id}', [TransactionController::class, 'showProductTransaction'])->name('payment-page');
    Route::post('/payment/{auction}/pay', [TransactionController::class, 'transactionPayment'])->name('payment-store');
    Route::get('/payment-success', function(){
        return view('sections.Transactions.payment-complete');
    })->name('payment-success');
    Route::delete('/logout', [UserController::class, 'logout'])->name('logout');
});