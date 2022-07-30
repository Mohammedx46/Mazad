<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function auctionCategory()
    {
        
        return view('mazad.auction-category', [
            "heading" => "All Auctions",
            "products" => Products::all(),
        ]);
    }
}
