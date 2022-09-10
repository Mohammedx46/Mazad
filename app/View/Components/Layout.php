<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Products;

class Layout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $count ;
    public function __construct()
    {
        $this->count = Products::all()->count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.layout', [
            'count' => $this->count,
        ]);
    }
}
