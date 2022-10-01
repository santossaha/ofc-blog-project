<?php

namespace App\View\Components;

use Illuminate\View\Component;

class SideNav extends Component
{

    public $name;
    public $route;
    public $activeRoute;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $route, $activeRoute)
    {
        // dd($activeRoute);
        $this->name = $name;
        $this->route = $route;
        $this->activeRoute = $activeRoute;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.side-nav');
    }
}
