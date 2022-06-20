<?php

namespace App\View\Components;

use Illuminate\View\Component;

class headingTitle extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $description;

    public function __construct($title , $description)
    {
        //
        // $this->headingData = [ 'title' => $data->title , 'description' => $data->description];
        $this->title = $title;
        $this->description = $description;
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.headingTitle');
    }
}
