<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable= [
        'name'
    ];


    public function product()
    {
        return $this->hasMany(Product::class);
    }

    public function auctions()
    {
        return $this->hasManyThrough(Auction::class, Product::class);
    }
}
