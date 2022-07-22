<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionUsers extends Model
{
    protected $fillable=[
        'auctions_id',
        'user_id',
        'user_price',
    ];

    // Relationship To Auction
    public function auction (){
        return $this->belongsTo(Auctions::class,'auctions_id');
    }

    // Relationship To User
    public function user (){
        return $this->belongsTo(User::class, 'user_id');
    }

    use HasFactory;
}
