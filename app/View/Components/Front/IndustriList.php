<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class IndustriList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $icon;
    public $shortDescription;

    public function __construct($title, $icon, $shortDescription)
    {
        $this->title=$title;
        $this->icon=$icon;
        $this->shortDescription=$shortDescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.industri-list');
    }
}
