<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'country',
        'zipcode',
        'state',
        'city',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
