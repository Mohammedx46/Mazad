<?php

namespace App\Listeners;

use App\Events\StoppedTimer;
use App\Models\AuctionUsers;
use App\Models\Auctions;
use App\Models\Bill;
use App\Models\BillData;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class EndAuction
{
    /**
     * Create the event listener.
     *
     * @return void
     */

    public $stoppedTimer;
    
    public function __construct()
    {
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle(StoppedTimer $event )
    {
        $this->endAuction($event->product);
    }

    public function endAuction($product)
    {
        $product->is_product_sold = 1;
        $product->save();

        $auctionId = Auctions::where('product_id', $product->id)->value('id');
        $auctionUser =  AuctionUsers::where('auction_id' , '=' , $auctionId );
        
        $formBillFields = [
            "user_id" => $auctionUser->value('user_id'),
            "comment" => "لقد فزت بمزايدة قدرها ". $auctionUser->latest()->value('user_price'),
            "is_bill_payed" => 0,
        ];

        
        $bill = Bill::create($formBillFields);
        
        $formBillDataFields = [
            "products_id" => $product->id,
            "bill_id" => $bill->id,
            "auction_users_id" => $auctionUser->value('id'),
        ];
        

        BillData::create($formBillDataFields);

    }
}
