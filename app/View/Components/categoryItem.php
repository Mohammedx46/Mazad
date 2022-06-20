<?php

namespace App\View\Components;

use Illuminate\View\Component;

class categoryItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $categoryName;
    public $categoryImage;

    public function __construct($categoryName ,  $categoryImage)
    {
        //
        $this->categoryName = $categoryName;
        $this->categoryImage = $categoryImage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.categoryItem');
    }
}
