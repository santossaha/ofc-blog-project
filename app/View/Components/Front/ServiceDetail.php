<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class ServiceDetail extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $icon;
    // public $aboutDescription;
    // public $aboutImage;
    // public $aboutTitle;
    public $serviceImage;
    // public $homeDescription;
    public $shortDescription;
    // public $appDevTitle;

    public function __construct($title, $icon=null, $shortDescription, $serviceImage)
    {
        $this->title=$title;
        $this->icon=$icon;
        // $this->aboutDescription=$aboutDescription;
        // $this->aboutImage  = $aboutImage;
        // $this->aboutTitle = $aboutTitle;
        $this->serviceImage=$serviceImage;
        // $this->homeDescription=$homeDescription;
        $this->shortDescription=$shortDescription;
        // $this->appDevTitle = $appDevTitle;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.service-detail');
    }
}
