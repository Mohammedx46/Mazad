<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Auctions;
use App\Models\Products;
use App\Models\Categories;
use App\Models\AuctionUsers;
use Illuminate\Http\Request;
use App\Models\ProductImages;

class BiddingController extends Controller
{
    public function isBidding(Products $product)
    {
        $user = User::find($product->user_id);
        $category = Categories::find($product->categories_id);

        $date =  now()->addDay('-4')->format('Y-m-d h:m:s');
        $liveAuctions = Products::LiveAuctions(['liveAuctions'=> $date])->paginate(3);

        $yourBidding = AuctionUsers::latest()->YourBidding(['yourBidding' => auth()->id()]);

        // dd($yourBidding);
        $is_bid = false;
        
        if(auth()->user()->insurance_amount > 0 && auth()->user()->is_bidding == 0)
        {
            $is_bid = true ;
        }

        return view('mazad.auction-details', [
            "heading" => "تفاصيل المزاد",
            "product" => $product,
            "products" => $liveAuctions,

            "user" => $user,

            "category" => $category,
            "categories" => Categories::latest(),

            "is_bid" => $is_bid ,
            "auction_images" => ProductImages::all(),
        ]);
    }

    // Store Bidding

    public function storeBidding(Request $request , Products $product)
    {
        
        
        $formFields = $request->validate([
            'user_price' => ['required', 'numeric', 'min:20'],
        ]);
        $auctions = Auctions::all();
        foreach($auctions as $auction)
        {
            if ( $auction->product_id == $product->id)
                $formFields['auction_id'] = $auction->id;
        }
        $formFields['user_id'] = auth()->id();

        $auctionUsers =  AuctionUsers::all()->where('user_id' , '=' , auth()->id())
            ->where('auction_id' , '=' , $formFields['auction_id'])
            ->sum('user_price');
        $formFields['user_total_bidding'] = $auctionUsers;

        AuctionUsers::create($formFields);

        return back();
    }
}
