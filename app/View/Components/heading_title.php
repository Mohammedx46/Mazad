<?php

namespace App\View\Components;

use Illuminate\View\Component;

class heading_title extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $headingData ;

    public function __construct($data)
    {
        //
        // $this->headingData = [ 'title' => $data->title , 'description' => $data->description];
        echo '<h1> ' . $data->title . '</h1>';
        $this->headingData = [ 'title' => "ldskjf", 'description' => "lsdkjf"];
    
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.heading_title');
    }
}
