<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class PortfolioList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $image;
    public $description;
    public $url;

    public function __construct($title, $image, $description, $url)
    {
        $this->title=$title;
        $this->image=$image;
        $this->description=$description;
        $this->url=$url;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.portfolio-list');
    }
}
