<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $action, $method, $item, $fields;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $method, $item, $fields)
    {
        $this->action   = $action;
        $this->method   = $method;
        $this->item     = $item;
        $this->fields   = $fields;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form');
    }
}
