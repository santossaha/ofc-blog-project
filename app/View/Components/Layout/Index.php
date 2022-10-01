<?php

namespace App\View\Components\Layout;

use Illuminate\View\Component;

class Index extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $route;
    public $title;
    public function __construct($title,$route=null)
    {
        $this->route=$route;
        $this->title=$title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.layout.index');
    }
}
