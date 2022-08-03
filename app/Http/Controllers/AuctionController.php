<?php

namespace App\Http\Controllers;

use App\Models\ProductImages;
use App\Models\Products;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function auction(Request $request)
    {
        // dd($request);
        return view('mazad.auction-details', [
            "heading" => "All Auctions",
            "products" => Products::latest()->paginate(),
            "auction_images" => ProductImages::all(),
        ]);
    }
}
