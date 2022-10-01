<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropDownList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $lable;
    public $route;
    public $activeRoute;

    public function __construct($lable, $route, $activeRoute)
    {
        $this->route= $route;
        $this->lable= $lable;
        $this->activeRoute= $activeRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.drop-down-list');
    }
}
