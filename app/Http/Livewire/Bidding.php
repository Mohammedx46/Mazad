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
    public $auctionId;

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
        $user = User::find(auth()->id());

        // $yourBidding = AuctionUsers::latest()->YourBidding(['yourBidding' => auth()->id()]);

        $this->is_bid = false;
        
        if(auth()->user()->insurance_amount > 0 && auth()->user()->is_bidding == 0)
        {
            $this->is_bid = true ;
            $user->update(['is_bidding'=> 1]);
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
        $maxUserPrice =  AuctionUsers::where('auction_id' , '=' , $this->auctionId )
            ->max('user_price');
            
        $auctionUserFields = $this->validate([
            'user_price' => ['required', 'numeric', 'min:' . $maxUserPrice, 'lte:' . auth()->user()->insurance_amount * 3],
        ]);        

        // auction_id field
        $auctionUserFields['auction_id'] = $this->auctionId;

        // user_id field
        $auctionUserFields['user_id'] = auth()->id();

        // user_total_bidding field
        $userTotalBidding =  AuctionUsers::where('user_id' , '=' , auth()->id())
            ->where('auction_id' , '=' , $this->auctionId )
            ->sum('user_price');

        $auctionUserFields['user_total_bidding'] = $userTotalBidding;

        // Insert into auctionUser Table
        $auctionUser = AuctionUsers::create($auctionUserFields);
        $this->user_price = null ;

        $this->emit('newBid', $auctionUser->id);

        session()->flash('success' , "تم إضافة مزايدتك");
    }
}
