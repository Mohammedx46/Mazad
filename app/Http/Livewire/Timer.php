<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;

class Timer extends Component
{    
    public $endDate ;
    public $product;

    public $days;
    public $hours;
    public $minutes;
    public $seconds;


    public function render()
    {
        $this->countDown();
        return view('livewire.timer');
    }
    
    public function countDown() 
    {
        $endTime = floor( Carbon::createFromFormat('Y-m-d H:i:s', $this->endDate)->valueOf() / 1000);
        if ($endTime < floor(now()->valueOf() / 1000)) {
            return redirect("/endAuction/{{$this->product->id}}");
        }
        
        $elapsedTime = $endTime - floor(now()->valueOf() / 1000);

        $this->days = floor($elapsedTime / 60 / 60 / 24);
        $this->hours = floor($elapsedTime / 60 / 60 % 24);
        $this->minutes = floor($elapsedTime / 60 % 60);
        $this->seconds = floor($elapsedTime % 60);
    }
}


