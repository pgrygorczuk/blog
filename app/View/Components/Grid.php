<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Grid extends Component
{
    public $items;
    public $fields;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $fields)
    {
        $this->items = $items;
        $this->fields = $fields;
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
