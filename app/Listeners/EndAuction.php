<?php

namespace App\Listeners;

use App\Events\StoppedTimer;
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
    }
}
