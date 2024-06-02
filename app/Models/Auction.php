<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'winnder_id',
        'start_time',
        'end_time',
        'starting_price',
        'buyout_price'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    } 
    public function bid(){
        return $this->hasMany(Bid::class);
    }
    public function winner()
    {
        return $this->belongsTo(User::class, 'winner_id');
    }

    public function highestBid()
    {
        return $this->hasOne(Bid::class)->orderBy('price', 'desc');
    }

}
