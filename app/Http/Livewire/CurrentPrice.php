<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\AuctionUsers;


class CurrentPrice extends Component
{

    public $product;
    public $auctionId;
    public $currentPrice = 10;

    protected  $listeners = ['newBid'];


    public function newBid(AuctionUsers $auctionUser)
    {
        $this->currentPrice = $auctionUser->user_price;
    }

    public function render()
    {
        $this->currentPrice =  AuctionUsers::where('auction_id' , '=' , $this->auctionId )
            ->max('user_price');

        return view('livewire.current-price');
    }
}
