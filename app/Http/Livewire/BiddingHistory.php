<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Auctions;
use App\Models\AuctionUsers;


class BiddingHistory extends Component
{
    public $product ;
    // protected  $listeners = ['newBid' => '$refresh'];

    // public $productId = $product->id;
    
    public function render()
    {
        $auctionId = Auctions::where('product_id', $this->product->id)->value('id');

        $auctionUsers =  AuctionUsers::where('auction_id' , $auctionId)->get();

        // dd($auctionUsers);
        return view('livewire.bidding-history', [
            'auctionUsers' => $auctionUsers,
        ]);
    }
}
