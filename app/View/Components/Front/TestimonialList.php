<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class TestimonialList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $image;
    public $shortTitle;
    public $description;

    public function __construct($name, $image, $shortTitle, $description)
    {
        $this->name=$name;
        $this->image=$image;
        $this->shortTitle=$shortTitle;
        $this->description=$description;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.testimonial-list');
    }
}
