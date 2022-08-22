<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuctionUsers extends Model
{
    protected $fillable=[
        'auction_id',
        'user_id',
        'user_price',
        'user_total_bidding',
    ];

    // public function scopeYourBidding($query, array $filters)
    // {
    //     // dd($filters);
    //     if ($filters['yourBidding'] ?? false) {
    //         $query->where('user_id', '=',  $filters['yourBidding'] , 'AND' , 'user_price' );
    //     }

    // }






    // Relationship To Auction
    public function auction (){
        return $this->belongsTo(Auctions::class,'auction_id');
    }

    // Relationship To User
    public function user (){
        return $this->belongsTo(User::class, 'user_id');
    }

    use HasFactory;
}
