<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Grid extends Component
{
    public $number;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($number)
    {
        $this->number = $number;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.grid');
    }
}
