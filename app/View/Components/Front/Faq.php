<?php

namespace App\View\Components\Front;

use Illuminate\View\Component;

class Faq extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $faqTitle;
    public $faqDescription;

    public function __construct($faqTitle, $faqDescription=null)
    {
        $this->faqTitle=$faqTitle;
        $this->faqDescription=$faqDescription;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.front.faq');
    }
}
