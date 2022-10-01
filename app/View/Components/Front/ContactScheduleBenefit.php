<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class ContactScheduleBenefit extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $benefitTitle;
    public $benefitDescription;
    
    public function __construct($benefitTitle, $benefitDescription)
    {
        $this->benefitTitle=$benefitTitle;
        $this->benefitDescription=$benefitDescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.contact-schedule-benefit');
    }
}
