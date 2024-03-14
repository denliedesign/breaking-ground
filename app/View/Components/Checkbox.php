<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $category;
    public $info;

    public function __construct($category, $info)
    {
        $this->category = $category;
        $this->info = $info;
    }

    public function render()
    {
        return view('components.checkbox');
    }
}
