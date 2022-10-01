<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class Remove extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public$removebutton;
    public function __construct($removebutton)
    {
       $this->removebutton= $removebutton;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.remove');
    }
}
