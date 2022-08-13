<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $item, $fields, $action;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($action, $item, $fields)
    {
        $this->action = $action;
        $this->item = $item;
        $this->fields = $fields;
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
