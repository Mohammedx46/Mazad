<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Models\ProductImages;
use App\Models\ProductCategories;

class AuctionController extends Controller
{

    public function index()
    {
        return view('index' , [
            "heading" => "All Auctions",
            "products" => Products::latest()->paginate(3),
            "categories" => ProductCategories::all(),
        ]);
    }
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
