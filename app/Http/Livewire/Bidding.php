<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Models\Auctions;
use App\Models\Products;
use App\Models\AuctionUsers;

class Bidding extends Component
{

    public $is_bid;
    public $product;

    //Form Fields
    public $user_price;


    public function render()
    {
        return view('livewire.bidding');
    }

    public function login()
    {
        // echo '<div style="background:red; width:100%; height:200px; color:white">How are you</div>';
        return redirect('/login');
    }

    public function isBidding(Products $product)
    {
        $user = User::find($product->user_id);
        // $yourBidding = AuctionUsers::latest()->YourBidding(['yourBidding' => auth()->id()]);

        $this->is_bid = false;
        
        if(auth()->user()->insurance_amount > 0 && auth()->user()->is_bidding == 0)
        {
            $this->is_bid = true ;
            $this->render();
        }else
        {
            return back();
        }
    }

    // Store Bidding

    public function storeBidding(Products $product)
    {
        // Fill Auction User Table
        // user_price field
        $auctionUserFields = $this->validate([
            'user_price' => ['required', 'numeric', 'min:20'],
        ]);

        // auction_id field
        $auctions = Auctions::all();
        foreach($auctions as $auction)
        {
            if ( $auction->product_id == $product->id)
            {
                $auctionUserFields['auction_id']= $auction->id;
                break;
            }
        }

        // user_id field
        $auctionUserFields['user_id'] = auth()->id();

        // user_total_bidding field
        $userTotalBidding =  AuctionUsers::where('user_id' , '=' , auth()->id())
            ->where('auction_id' , '=' , $auctionUserFields['auction_id'] )
            ->sum('user_price');
        $auctionUserFields['user_total_bidding'] = $userTotalBidding;

        $lastBiddingId =  AuctionUsers::where('user_id' , '=' , auth()->id())
            ->where('auction_id' , '=' , $auctionUserFields['auction_id'] )
            ->max('auction_user_id');

        // Insert into auctionUser Table
        
        AuctionUsers::create($auctionUserFields);

        $auctionUsers = AuctionUsers::latest()->where ('auction_id' , '=' , $auctionUserFields['auction_id']);
        
        return $auctionUsers;
    }
}
