<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'quantity',
        'condition',
        'category_id',
        'user_id',
        'image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function auction()
    {
        return $this->hasOne(Auction::class);
    }

    public function user()
    {   
        return $this->belongsTo(User::class);
    }


    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
