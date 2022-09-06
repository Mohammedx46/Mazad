<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillData extends Model
{
    use HasFactory;
    protected $fillable = [
        "products_id",
        "bill_id",
        "auction_users_id",
    ];

    public function products(){
        return $this->belongsTo(Products::class,'products_id');
    }

    public function bill(){
        return $this->belongsTo(Bill::class,'bill_id');
    }

    public function auction_users(){
        return $this->belongsTo(auctionUsers::class,'auction_users_id');
    }
}
