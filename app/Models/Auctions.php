<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auctions extends Model
{

    protected $fillable =[
        'products_id',
        'auction_current_price',
        'auction_status'
    ];

    // Relationship To auctionUser
    public function auction_user()
    {
        return $this->hasMany(AuctionUsers::class, 'auction_id');
    }

    // Relationship To Product
    public function product (){
        return $this->belongsTo(Products::class , 'products_id');
    }
    use HasFactory;
}
