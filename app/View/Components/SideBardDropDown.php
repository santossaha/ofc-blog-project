<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideBardDropDown extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $url;
    public $lable;
    public $activeRoute;
    public function __construct($url, $lable, $activeRoute)
    {
        $this->url = $url;
        $this->lable = $lable;
        $this->activeRoute = $activeRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-bard-drop-down');
    }
}
