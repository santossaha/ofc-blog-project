<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class ServiceAboutWithCountBox extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $icon;
    public $aboutTitle;
    public $aboutDescription;
    public $aboutImage;

    public function __construct($aboutTitle, $icon=null,$aboutImage=null, $aboutDescription)
    {
        $this->icon = $icon;
        $this->aboutTitle = $aboutTitle;
        $this->aboutDescription=$aboutDescription;
        $this->aboutImage  = $aboutImage;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.service-about-with-count-box');
    }
}
